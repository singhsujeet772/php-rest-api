<?php

$ch = curl_init();

$headers = [
    "Authorization: Client-ID 8JRk7nea5HoqJ5Wu9zhGtPw4yUA-adrVXunyrmx3KWg"
];

// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt_array($ch,[
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADER => true
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch , CURLINFO_HTTP_CODE);
$content_type = curl_getinfo($ch , CURLINFO_CONTENT_TYPE);
$content_length = curl_getinfo($ch , CURLINFO_CONTENT_LENGTH_DOWNLOAD);

curl_close($ch);

echo $status_code,"\n";
echo $content_type,"\n";
echo $content_length,"\n";
echo $response,"\n";