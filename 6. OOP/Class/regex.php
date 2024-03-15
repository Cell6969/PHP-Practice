<?php

/**
 * Checkig pattern
 */

$string = "Hello world, hello youtube";
$pattern = "/abc/";

if (preg_match($pattern, $string, $matches)) {
    print_r($matches);
} else {
    echo "There aren't any matches";
}