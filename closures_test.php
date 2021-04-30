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


/*$tom = new User('Tom', 17);
$bob = new User('Bob', 20);
$den = new User('Den',25);*/

$users = [new User('Tom', 17),new User('Bob', 20),new User('Den',25),
    new User('Jack',10)];
/*var_dump($users);*/



/*$under18 = [];
$under18 = array_filter($users, function ($x){
    if ($x->getAge()>18){
        return true;
    }else{
        return false;
    }
});*/

/*class Control
{
    public function under($users)
    {
        $under= [];
        for ($i = 0; $i < count($users); $i++) {

            foreach ($users[$i] as $us) {
                if ($us > 18) {
                    $under[]=$us;
                    return  true;

                } else {
                    return false;
                }
            }
        }
    return $under;
    }
}*/


class Control{
/*    public $users;
    public function __construct(array $users)
    {
        $this->users=$users;
    }
    public function users(){
        return $this->users;
    }*/
    public static function under(array $users): array
    {
        // возвращаем отфильтрованные массив
        return array_filter($users, function ($user) {
            // оставляем только тех юзеров, кому больше 18
            return $user->getAge() > 18;
        });
    }
}

/*
$contr= new Control([
    new User('Vova',26),
    new User('Alex',15),
    new User('Den',21)
]);*/

$control = new Control;
$adultUsers = $control->under($users);
var_dump($adultUsers);

