<?php

/**
 * Session
 */
 
// start session
session_start();

// create
$_SESSION['test'] = 'testsession';


// update
$_SESSION['test'] = 'updateSession';


//delete
unset($_SESSION['test']);