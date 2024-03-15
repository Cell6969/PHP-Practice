<?php
/**
 * Project Distance Calculator
 */

/**
 * PROBLEM
 * we want to write a function calculate the distance between two place with their latitude and longitude
 * Steps:
 * 1. calculate the difference of longitude of the second place and first place
 * 2. convert value to radians
 * 3. calculate cosine
 * 4. convert latitude both place to radians
 * 5. calculate sin and cosine both converted latitudes
 * 6. sins of converted latitudes multiplied plus cosines multiplied
 */

// paris
$placeA = [
    'latitude' => 48.864716,
    'longitude' => 2.349014
];

// berlin
$placeB = [
    'latitude' => 52.520008,
    'longitude' => 13.404954
];

function calcDist($placeA, $placeB, $humanReadAble = true): float
{
    $diffLong = $placeA['longitude'] - $placeB['longitude'];
    $radDiffLong = deg2rad($diffLong);
    $cosDiffLong = cos($radDiffLong);

    $latitudeARad = deg2rad($placeA['latitude']);
    $latitudeBRad = deg2rad($placeB['latitude']);

    $sinLatArad = sin($latitudeARad);
    $cosLatARad = cos($latitudeARad);
    $sinLatBrad = sin($latitudeARad);
    $cosLatBrad = cos($latitudeBRad);

    $dist = $sinLatArad * $sinLatBrad + $cosLatARad * $cosLatBrad * $cosDiffLong;
    if (!$humanReadAble) {
        return $dist;
    }
    $arcDist = acos($dist);
    $radiusInKm = 6364.963;
    $distInKm = $arcDist * $radiusInKm;
    return $distInKm;
}

$dist = calcDist($placeA, $placeB, false);
echo "$dist";






