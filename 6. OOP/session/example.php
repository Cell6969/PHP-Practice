<?php
session_start();

if(isset($_SESSION['test'])){
    $_SESSION['test'] = 'session update';
    echo $_SESSION['test'];
} else {
    echo 'there is no session set';
}