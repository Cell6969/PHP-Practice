<?php

/**
 * Project 2
 * PROBLEM:
 * we want to calculate the age of a person in days
 * we will get a date and then we print out the number of days since the birthday
 * for example there are 10136 days since my birthday
 */

$birthday = '2023-11-26';
$today = date('Y-m-d');

$timestamp = strtotime($today) - strtotime($birthday);

$numOfDays = $timestamp / (60 * 60 * 24);
echo "There are $numOfDays days since $birthday";