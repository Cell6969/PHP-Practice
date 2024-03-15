<?php

/**
 * Working with files
 *
 */

//  Open File
/**
 * open a file
 * read the file or write it
 * close the file
 */
//$file = fopen('./example.txt', 'w');


// r for reading, w for writing, a for appending
// read the file
//$line = fgets($file);
//while ($line!=false){
//   // do sth
//   
//   // do sth that affects the conditon
//   $line = fgets($file);
//}

//// write to the file
//fwrite($file, "hello world \n");
//fwrite($file, "hello youtube" .PHP_EOL);
//
//// close the file
//fclose($file);

//$file = fopen('./example.txt', 'w');
//fwrite($file, 'hello' . PHP_EOL);
//fclose($file);

/// append to the file
//$file = fopen('./example.txt','a');
//fwrite($file, 'hello world'.PHP_EOL);
//fclose($file);

/// read the file
$file = fopen('./example.txt', 'r');
$line = fgets($file);
while ($line != false) {
    echo $line;
    $line = fgets($file);
}
fclose($file);
