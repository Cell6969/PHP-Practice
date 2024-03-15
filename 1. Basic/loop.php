<?php
/**
 * loops
 */

// // for
// for ($x = 0 ; $x < 10 ;$x++) {
//     echo "the value of x is $x";
// }

// // While 
// $x = 0;
// while ($x <= 10) {
//     echo "the value of x is $x";
//     $x++;
// }

// For each
$array = [1,'amir','youtube',2];
foreach($array as $key => $value) {
    echo "The $key in the array is $value";
}
