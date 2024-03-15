<?php

$redirect = false;
if (empty($_POST['name'])) {
    $redirect = true;
}

if (empty($_POST['email'])) {
    $redirect = true;
}

if (empty($_POST['message'])) {
    $redirect = true;
}
// if one of key empty redirect
if ($redirect) {
    header("Location: form.php?submitted=false");
    exit();
}


// create json file
$filename = 'contact.json';
$file = fopen('./' . $filename, 'r');
$jsontext = '';
$line = fgets($file);
while ($line != false) {
    $jsontext = $jsontext . $line;
    $line = fgets($file);
}
fclose($file);
// check if empty or not
if (empty($jsontext)) {
    $contact = [];
} else {
    $contact = json_decode($jsontext, true);
}

$contact[] = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'message' => $_POST['message'],
    'date' => date('Y-m-d')
];

$jsonContact = json_encode($contact);

$file = fopen('./' . $filename, 'w');
fwrite($file, $jsonContact);
fclose($file);
header("Location: form.php?submitted=true");
exit();

