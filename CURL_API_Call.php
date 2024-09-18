<?php

$curl = curl_init();

$url = "https://simple-books-api.glitch.me/books?type=fiction";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curl);
$error = curl_error($curl);

if ($error) {
    echo "Error: " . $error;
} else {
    $response = json_decode($response);
    // if($response->id == 1) {
    //     echo "Id: 1 is available: ";
    // }
}

//echo $response;
