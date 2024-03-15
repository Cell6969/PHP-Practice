<?php

/**
 * Array Function
 */

//// array filter
$array = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'beginner'
];
// 0 => use value on callback
$filteredArray = array_filter($array, function ($value) {
    return $value == 'advanced';
}, 0);
print_r($filteredArray);

// ARRAY_FILTER_USE_KEY => use key on callback
$filteredArray = array_filter($array, function ($key) {
    return $key == 'golang';
}, ARRAY_FILTER_USE_KEY);
print_r($filteredArray);

// ARRAY_FILTER_USE_BOTH => use key and value
$filteredArray = array_filter($array, function ($value, $key) {
    return $value == 'advanced' && $key != 'python';
}, ARRAY_FILTER_USE_BOTH);
print_r($filteredArray);


//// Array Merge
$arrayA = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'beginner',
    'C#' => 'unknown'
];
$arrayB = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'advanced'
];
$mergedArray = array_merge($arrayA, $arrayB);
print_r($mergedArray);

//// Array Map => for map, like foreach element of array
function addHashTag($item)
{
    return '#' . $item;
}

$array = ['english', 'java', 'spanish', 'chinese'];
$hashtagArray = array_map('addHashTag', $array);
print_r($hashtagArray);

//// Array Chunk => for splitting
$array = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'beginner'
];
$array_chunk = array_chunk($array, 2, true);
print_r($array_chunk);

//// Array Search => find first key by value
$array = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'beginner'
];
$key = array_search('beginner', $array, false);
echo $key . PHP_EOL;

//// Array Replaced => for replace array 1 with next array
$arrayOri = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'beginner',
    'java' => 'beginner'
];

$array_replace = [
    'python' => 'beginner',
    'javascript' => 'expert',
    'golang' => 'expert',
    'php' => 'advanced',
    'C++' => 'advanced'
];
$updateArray = array_replace($arrayOri, $array_replace);
print_r($updateArray);

//// Array Sort => sort array by value or key
// 1. Sort by value or by key
// 2. order
// 3. keep the keys
$array = [
    'python' => 'advanced',
    'javascript' => 'expert',
    'golang' => 'beginner',
    'php' => 'advanced',
    'C++' => 'beginner',
    'java' => 'beginner',
    'rust',
    'c#'
];
print_r($array);
// sort
//sort($array); // ascending by value, remove keys
//rsort($array); // descending by value, remove keys
//ksort($array); // ascending by key
//krsort($array); // descending by key
//asort($array); // ascending by value but keep the keys
arsort($array); // descending by value but keep the keys
print_r($array);

//// array unique => make value array is unique
$array = ['java', 'python', 'c++', 1, '10', 10];
$uniqueArray = array_unique($array);
var_dump($uniqueArray);

//// array combination => combine key and value as one array
$key = ['javascript', 'golang', 'php', 'python'];
$values = ['nodejs', 'vanilla', 'laravel', 'flask'];
$combinedArray = array_combine($key, $values);
print_r($combinedArray);

//// Array reduce => reduce an array to make into single value
$array = [1, 2, 3, 4, 5];
$sum = array_reduce($array, function ($prev, $next) {
    return $prev + $next;
});
echo $sum . PHP_EOL;
// other ways
echo array_sum($array) . PHP_EOL; // sum
echo array_product($array) . PHP_EOL; // factorial


//////// Continue
