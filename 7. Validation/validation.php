<?php

//// Validation
//
//$variable = 'test@gamil.com';
//
//if (!filter_var($variable, FILTER_VALIDATE_EMAIL)) {
//    echo "Email is not valid";
//} else {
//    echo "Email is valid";
//}
//
//$url = 'https://example.com';
//if (!filter_var($url, FILTER_VALIDATE_URL)) {
//    echo "Url is not valid";
//} else {
//    echo "Url is valid";
//}

// Sanitize
$variable = "<p>Hello world!</p>";
$sanitizeData = filter_var($variable, FILTER_SANITIZE_STRING);
echo $sanitizeData;