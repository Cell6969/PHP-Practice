<?php

// sample string
$text = 'This is a String';
echo $text . PHP_EOL;

// String to array => split string into array
$string2array = explode(' ', $text);
print_r($string2array);

// Array to string => make string from array
$array2string = implode(' ', $string2array);
echo $array2string . PHP_EOL;

// string to uppercase => convert string into all characted uppercase
$uppercasedText = strtoupper($text);
echo $uppercasedText . PHP_EOL;

// string to lowercase => convert string into all characted lowercase
$lowercasedText = strtolower($text);
echo $lowercasedText . PHP_EOL;

// uppercase for first letter
$UcFirstText = ucfirst($text);
echo $UcFirstText . PHP_EOL;

// uppercase each word first letter
$UcWords = ucwords($text);
echo $UcWords . PHP_EOL;

// Clean extra spaces
$UcWords = '            ' . $UcWords . '          ';
echo $UcWords . PHP_EOL;
$trimmedText = trim($UcWords);
echo $trimmedText . PHP_EOL;

// New Lines to HTML Breaks
