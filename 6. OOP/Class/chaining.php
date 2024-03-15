<?php

/**
 * Chaining Method => for continuition of call object
 */

class Human
{
    private $name;
    private $age;

    public function setName($name)
    {
        $this->name = ucfirst($name);
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function introduce()
    {
        return "Hello my name is " . $this->name . " and i am " . $this->age . " years old";
    }
}

$amir = new Human();
//$amir->setName('amir');
//$amir->setAge(22);

echo $amir->setName('amir')
    ->setAge(22)
    ->introduce();
