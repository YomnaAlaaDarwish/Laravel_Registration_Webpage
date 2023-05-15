<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    //
    public function callapi()
    {
        $getday = $_REQUEST['q'];
        $getmonth = $_REQUEST['s'];
        $listOfIDS = array();
        $listOfNames = array();
        if ($getday !== "") {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://imdb8.p.rapidapi.com/actors/list-born-today?month=" . $getmonth . "&day=" . $getday,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                    "X-RapidAPI-Key: 5bb8f5a9aamsh90d816647478152p1023ccjsn6b0edceeb944"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = json_decode($response);
                $pattern = "/name/i";
                if (!is_null($data)) {
                    foreach ($data as $value) {
                        $value2 = preg_replace($pattern, "/", $value);
                        $parts = str_replace("/", "", $value2);
                        array_push($listOfIDS, $parts);

                    }
                }

            }
            foreach ($listOfIDS as $id) {

                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://imdb8.p.rapidapi.com/actors/get-bio?nconst=" . $id,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                        "X-RapidAPI-Key: 5bb8f5a9aamsh90d816647478152p1023ccjsn6b0edceeb944"
                    ],
                ]);

                $Response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {

                    $key = "name";
                    $jsonObj = json_decode($Response);
                    $firstName = $jsonObj->$key;
                    array_push($listOfNames, $firstName);
                }

            }
        }
        foreach ($listOfNames as $id) {
            echo $id . '<br>';
        }



        //
    }
}
