<?php
/**
 * Match
 */

$number = "5";
$result = match($number) {
    "5" => "5",
    "4","3" => "4 or 3",
    default => "nothing"
};

echo $result;