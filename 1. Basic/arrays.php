<?php
/*
Arrays
*/

// Define array
$a = [1, 2, 3, 4, 5];
$b = array(1, 2, 3, 4, 5);

// Printing array
// print_r($a);
// var_dump($a);

/*
array deconstruction
*/
// Key
$a = [1, 'amir', 2, 10, 'john'];
// print_r($a);

// indexing
$a = [
    0 => 1,
    20 => 2,
    55 => 3
];

//  combined
$a = [
    23 => 2,
    55 => 'amir',
    'x' => 1,
    'y' => 2,
    'name' => 'amir'
];

// print specifi value
// var_dump($a[55]);

// Add value
$a[] = 'youtube';
var_dump($a);
