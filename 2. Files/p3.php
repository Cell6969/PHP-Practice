<?php

/**
 * we have a json string of countries with their phone numbers
 * 1. we want read it and find the phone code based on country for example if i write turkey i would get 0090
 * 2. Write it all into csv
 */
 
$data = '{
    "UK": "44",
    "USA": "1",
    "Algeria": "213"
}';

$query = "Algeria";

/**
 * SOlUTION 1
 */
 
$countries = json_decode($data, true);
$getPhone = $countries[$query];
echo $getPhone;

/**
 * SOLUTION 2 
 */
 
$file = fopen('./p2.csv', 'w');
fputcsv($file, ["country", "phone_code"]);
foreach ($countries as $country => $phoneCode) {
    fputcsv($file, [$country, $phoneCode]);
};
fclose($file);
