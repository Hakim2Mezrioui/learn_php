<?php
/*
|--------------------
| Project: Build a we crawler
|--------------------
*/

/*
* PROBLEM:
* create a router crawler and get the box office data from IMDB's Box office page
*/


/*
*solution
*/

$curl = curl_init();
$requrestType = "GET";
$url = "https://www.imdb.com/chart/boxoffice/";
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => $requrestType,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => true
]);
$response = curl_exec($curl);
curl_close($curl);

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($response);
$xpath = new DOMXPath($dom);
$weekendTitleNode = $xpath->query('//*[@id="__next"]/main/div/div[3]/section/div/div[1]/div/div[2]/hgroup/h1'); // xpath
$firstItem = $weekendTitleNode->item(0);
echo $firstItem->nodeValue;

/*
|--------------------
| End of Project
|--------------------
*/
