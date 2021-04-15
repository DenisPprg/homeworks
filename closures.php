<?php

class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): string
    {
        return $this->age;
    }

}

$users = [new User('Tom', 17),new User('Bob', 20),new User('Den',25),
    new User('Jack',10)];

class Control{

    public static function under(array $users): array
    {
        return array_filter($users, function ($user) {
            return $user->getAge() > 18;
        });
    }
}

$control = new Control;
$adultUsers = $control->under($users);
var_dump($adultUsers);