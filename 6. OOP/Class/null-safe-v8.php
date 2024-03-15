<?php

class Home
{
    public $address = 'here';
}

class Person
{
    public ?Home $home = null;
}



$person = new Person();
echo $person->home?->address;