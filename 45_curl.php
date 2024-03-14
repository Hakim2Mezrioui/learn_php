<?php

/*
|--------------------
| Curl
|--------------------
*/

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://example.com",
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HEADER => [],
    CURLOPT_POSTFIELDS => '',
]);
$response = curl_exec($curl);
curl_close($curl);

echo $response;
/*
|--------------------
| End of Curl
|--------------------
*/