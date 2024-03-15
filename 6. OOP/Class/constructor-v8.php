<?php


class Person
{
    public function __construct(public string $name, public int $age)
    {

    }

    public function introduce()
    {
        return "Hello my name is $this->name and i am $this->age years old";
    }
}

$person = new Person('amir', 28);
echo $person->introduce();