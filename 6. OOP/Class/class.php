<?php

/**
 * Class
 */

class Human
{
    private $name;
    private $age;
    private $yearBorn;

    public function __construct(string $name, int $yearBorn)
    {
        $this->name = $name;
        $this->yearBorn = $yearBorn;
        $this->calculateAge();

    }

    private function calculateAge()
    {
        $this->age = (int)date('Y') - $this->yearBorn;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$human = new Human('arsi', 1999);
echo $human->getAge().PHP_EOL;
echo $human->getName();