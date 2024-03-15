<?php

/**
 * Abtract Class => for implement inheritance
 */

abstract class Human
{
    private $name;

    public function sayHello()
    {
        echo 'Hello';
    }

    abstract public function nationality();
}

class Amir extends Human
{
    public function nationality()
    {
        // TODO: Implement nationality() method.
        echo "My nationality is ";
    }
}