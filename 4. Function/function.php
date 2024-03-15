<?php
/**
 * Function
 */

// example
function testFunc(int $a = 0, int $b = 0): int
{
    echo $a + $b . PHP_EOL;
    return $a + $b;
}

;
testFunc('3.5', 2);
testFunc();

// with type
function testString(): string
{
    return "Hello world";
}

;
testString();

