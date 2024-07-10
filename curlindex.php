<?php

$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt_array($ch,[
    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=London&appid=7777fed14aa02ec38418591e6a4fd4e3",
    CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch , CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code,"\n";
echo $response,"\n";