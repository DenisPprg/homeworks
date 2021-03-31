<?php

class User{
    public $name;
    public $age;
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setAge(string $age)
    {
        $this->age = $age;
    }

    public function getAge(): string
    {
        return $this->age;
    }
}

class Builder extends User {
    private static $counter=0;
    function __construct($name, $age){
        self::$counter++;
        $this->name = $name;
        $this->age = $age;
    }
    static function getCount(){
        return self::$counter;
    }
}

$tom = new Builder('Tom', 23);
$bob = new Builder('Bob', 50);
$den = new Builder('Den', 26);

echo "Всего пользователей: " .  Builder::getCount();

