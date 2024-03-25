<?php

/*
|--------------------
| Curl
|--------------------
*/

/*
* Now let's talk about Carol.
* Sometimes we need to send requests to another URL to get data, maybe another API.
* So how can we do that in PHP?
* There are many ways, but now we are going to talk about Carol.
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