<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://ip-api.com/json/?query=192.168.0.20",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true);
echo 'lat : ' . $response['lat'] . '<br>' . ' long :' . $response['lon'];
echo 'lat : ' . $response['region'] . '<br>' . ' long :' . $response['city'];
