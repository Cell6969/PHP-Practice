<?php

/**
 * Inheritance
 */

class Car
{
    public function drive()
    {
        echo "car is driving";
    }
}

class ElectricCar extends Car
{
    public function epcu()
    {
        echo "Iam the electric power Control Unit";
    }

    protected function epcu2()
    {
        echo "This is protected function";
    }
}

class Tesla extends ElectricCar
{
    public function autoDrive()
    {
        echo "I got this, you can sleep";
    }

    public function runEpcu2()
    {
        $this->epcu2();
    }
}

$tesla = new Tesla();
$tesla->autoDrive();
$tesla->drive();

$tesla->runEpcu2();