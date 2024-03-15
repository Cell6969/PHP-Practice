<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "name is $name";
} else {
    echo "name is unknown";
}