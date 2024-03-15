<?php


/**
 * Include vs Required
 * Include will load all the code from other file even there is error. There will be warning
 * Require will stop execution if there is an error on other file
 */

// include example
//echo "hello from first file" . PHP_EOL;
//include "example.php";

// required example
//require "example.php";
//
//echo "hello from first file" . PHP_EOL;

// _once, will import once 
require_once "example.php";
echo "Hello from first-file" . PHP_EOL;

