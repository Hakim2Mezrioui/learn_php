<?php
/*
|--------------------
| Project 5: Distance Calculator
|--------------------
*/

/*
*PROBLEM:
*we want to write a function calculate the distance between two place with their latitude and longitude
*Steps to calculate the distance
* 1- calculate the difference of longitude of the second place and the first place
* 2- we need to convert this value to radians
* 3- and then calculate its cosine
* 4- convert the latitude of both places to radians
* 5- calculate the sine and cosine of both converted latitudes
* 6- sine of converted latitudes muliplied plus cosines multiplied
*/

// paris
$placeA = [
    'latitude' => 48.864716,
    'longitude' => 2.349014,
];

// berlin
$placeB = [
    'latitude' => 52.520008,
    'longitude' => 13.404954,
];


function calculateDistance(array $placeA, array $placeB, $humanReadable = true) : float {
    $longitudeDiff = $placeA['longitude'] - $placeB['longitude'];
    $longitudeDiffInRad = deg2rad($longitudeDiff);
    $longitudeDiffInRadCosine = cos($longitudeDiffInRad);
    
    $latitudeAInRad = deg2rad($placeA['latitude']);
    $latitudeBInRad = deg2rad($placeB['latitude']);
    
    $latitudeAInRadSine = sin($latitudeAInRad);
    $latitudeAInRadCosine = cos($latitudeAInRad);
    $latitudeBInRadSine = sin($latitudeBInRad);
    $latitudeBInRadCosine = cos($latitudeBInRad);
    
    $dist = $latitudeAInRadSine * $latitudeBInRadSine + $latitudeBInRadCosine * $latitudeAInRadCosine * $longitudeDiffInRadCosine;
    if(!$humanReadable) {
        return $dist;
    }

    $arcCosDistance = acos($dist);
    $radiusInKm = 6364.963;
    $distInKim = $arcCosDistance * $radiusInKm;
    return $distInKim;    
}

$dist = calculateDistance($placeA, $placeB);
echo $dist;

/*
|--------------------
| End Project 5
|--------------------
*/
