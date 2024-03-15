<?php

/**
 * Cookies
 *
 */

//// create
//$expires = time() + (60 * 60 * 24 * 30); // 1 month
//// (key, value, expired,path, domain, secure, httponly)
//setcookie("test", "this is cookie test", $expires, "/", "localhost", true, true);

//// read
//if (isset($_COOKIE['test'])) {
//    echo $_COOKIE['test'];
//} else {
//    echo "there was no cookie";
//}

//// update
//$expires = time() + (60 * 60 * 24 * 30);
//setcookie("test", "cooki1", $expires, "/");
//setcookie("test", "cookiupdate", $expires, "/");

// Delete
//setcookie("test", '', time() - 3600, '/');