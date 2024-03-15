<?php

/**
 * Static
 */

class StaticHuman
{
    private static $name = 'Human';

    public static function sayHello()
    {
        echo 'Hello world! my name is ' . self::$name;
    }

}

class Human
{
    private $name = 'Human';

    public function sayHello()
    {
        echo 'Hello world! my name is ' . $this->name;
    }
}


StaticHuman::sayHello();

$human = new Human();
$human->sayHello();