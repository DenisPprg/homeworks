<?php

class Person
{
    public $name = "Denis", $lastname = "Poprugailo", $age = 25, $sex = "Male" ;

    function Info()
    {
        echo "My name and lastname: $this->name $this->lastname, I am $this->age years old, and I'm $this->sex.<br>";
    }
}

$den = new Person();
$den->Info();

$alex = new Person();
$alex->name = "Alex";
$alex->lastname = "Burmistrov";
$alex->age = 30;
$alex->sex = "Male";
$alex->Info();

