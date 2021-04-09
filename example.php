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
    public function __destruct()
    {
        echo 'Проверка дестркутора' . "\n";
    }
}

class Builder extends User {
    private static $counter=0;
    public function __construct($name, $age){
        self::$counter++;
        echo 'Проверка конструктора, имя - '. $name .', возраст - '. $age. "\n";
        $this->name = $name;
        $this->age = $age;
    }
    static function getCount(){
        return self::$counter;
    }
    public function __toString()
    {
        return $this->name . ', ' . $this->age;
    }
    public function __destruct()
    {
        parent::__destruct();
    }
}

$tom = new Builder('Tom', 23);
$bob = new Builder('Bob', 50);


echo  'Проверка __toString, имя и возраст - '. $bob. "\n";
echo 'Всего пользователей: ' .  Builder::getCount(). "\n";

