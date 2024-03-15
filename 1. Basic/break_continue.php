<?php
// // Break
// $namaes = ['John', 'Alex', 'Simon', 'Amir'];
// $foundIt = false;
// foreach ($namaes as $nama) {
//     if ($nama == 'Alex') {
//         $foundIt = true;
//         break;
//     }
// }
// ;

// echo $foundIt;

// Continue
$numbers = [3, 300, 457, 786, 234];
foreach ($numbers as $number) {
    // echo $number . PHP_EOL;
    if ($number % 3 == 0) {
        continue;
    }
    echo $number;
}