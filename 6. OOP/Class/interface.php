<?php

/**
 * Interface => like skeleton
 */

interface Human
{
    public function sayName();

    public function getAge(int $yearBorn);
}

;

// implement for class
class Amir implements Human
{
    public function sayName()
    {
        // TODO: Implement sayName() method.
        echo "My namer is amir";
    }

    public function getAge(int $yearBorn)
    {
        // TODO: Implement getAge() method.
        echo "I am " . (date('Y') - $yearBorn) . " years old";
    }
    
    public function fly()
    {
        
    }
}


$amir = new Amir();
$amir->sayName();
$amir->getAge(1999);