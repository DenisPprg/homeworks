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

class Builder {
    private static $counter=0;
    public function create($name,$age){
        $user = new User();
        $user->age = $age;
        $user->name = $name;
        self::$counter++;
    }
    static function getCount(){
        return self::$counter;
    }
}

echo "\n";
$a = new Builder();
$user1 = $a->create('Den', 25);
$user2 = $a->create('Joe', 30);
$user3 = $a->create('Alex', 35);



echo 'Всего пользователей: ' .  Builder::getCount(). "\n";

