<?php
/**
 * Project 1
 * Problem
 * we have list of people information with name and age
 * 1. we want to count the number of adults (+18 years old) and children
 * 2. we want to make list of people between 22 to 30 who can apply for job
 */

$people = [
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Air', 'age' => 20],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Simon', 'age' => 28],
    ['name' => 'Maria', 'age' => 30],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Tome', 'age' => 21],
    ['name' => 'Sarah', 'age' => 5],
];

/* Answer */
$adultCount = 0;
$childCount = 0;
$canApplyJob = [];

foreach ($people as $person) {
    $age = $person['age'];
    if ($age >= 18) {
        $adultCount++;
        if ($age >= 22 and $age <= 30) {
            $canApplyJob[] = $person;
        }
    } else {
        $childCount++;
    }
}

echo "There are $adultCount Adult". PHP_EOL;
echo "There are $childCount Children". PHP_EOL;
echo "Here the list who can apply for the job". PHP_EOL;
print_r($canApplyJob);


