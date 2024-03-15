<?php

/*
Conditionals
*/

// If else if else

$a = true;
if ($a == true) {
    echo 'true';
} else if ($a == false) {
    echo 'false';
} else {
    echo 'unknown';
}

// Switch 
$variable1 = 'a';
switch ($variable1) {
    case 'a':
        echo 'this is a';
        break;
    case 'b':
        echo 'this is b';
        break;
    default:
        echo 'this is default if no match';
        break;
};

// ternary operator
$variable = 2;
// echo ($variable == 2) ? 'this is two': 'unknown';
$variable8 = ($variable == 2) ? 'two' : 'unknown';
echo $variable8;
