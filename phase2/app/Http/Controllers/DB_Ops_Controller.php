<?php

namespace App\Http\Controllers;

use App\Mail\testMail;     
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class DB_Ops_Controller extends Controller
{
    public function myform()
    {
    	return view('index');
    }
     
    public function myformPost(Request $request)
    { 
        $email = "dww0";
    	$validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:web,username',
        ]);
        if ($validator->passes()) {
            $username = $request->input('username');
            $fullname = $request->input('fullname');
            $email = $request->input('email');
            $password = $request->input('password');
            $birthdate = $request->input('birthdate');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $image = $request->input('image');
            
            $data=array('username'=>$username,"fullname"=>$fullname,"email"=>$email,"password"=>$password,"birthdate"=>$birthdate,"phone"=>$phone,"address"=>$address,"image"=>$image);
            DB::table('web')->insert($data);
            return response()->json(['success'=>'Added new records.']);
        }
        Mail::to($email)->send(new testMail());
       return response()->json(['error'=>$validator->errors()->all()]);
    }
}
