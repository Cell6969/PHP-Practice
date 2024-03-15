<?php

//example json
//{
//    "accounts": {
//        "twitter": "https://twitter.com",
//        "youtube": "https://youtube.com",
//        "facebook": "https://facebook.com",
//    }
//}

//example xml
//<accounts>
//    <account type="twitter">https://twitter.com</account>
//    <account type="twitter">https://twitter.com</account>
//    <account type="twitter">https://twitter.com</account>
//    <account type="twitter">https://twitter.com</account>
//</accounts>

//// read json
//$json = '{
//    "accounts": {
//        "twitter": "https://twitter.com",
//        "youtube": "https://twitter.com",
//        "instagram": "https://twitter.com"
//        }
//}';
//$array = json_decode($json, true);
//$accounts = $array['accounts'];
//foreach ($accounts as $account => $link) {
//    echo "Addres for $account is $link " . PHP_EOL;
//}

//// Write json
$array = [
    "accounts" => [
        "twitter" => "https://twitter.com",
        "youtube" => "https://youtube.com",
        "facbook" => "https://facbook.com",
        "blog" => "https://blog.com",
    ]
];
$json = json_encode($array);
print_r($array["accounts"]["twitter"]);
//echo $json;

