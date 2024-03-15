<?php
/**
 * CSV
 */

//// open and close csv
//$file = fopen('./example.csv', 'r');
//$line = fgetcsv($file);
//
//while ($line != false) {
//    $id = $line[0];
//    $name = $line[1];
//    echo "the id for value with name $name is $id".PHP_EOL;
//    $line = fgetcsv($file);
//}
//
//fclose($file);


// write csv
$file = fopen('./example.csv', 'a');
fputcsv($file, ['6','Amazon']);
fclose($file);