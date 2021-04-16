<?php

spl_autoload_register(function ($name){
    $path = 'class/'.$name.'.php';
    include $path;
});

$users = [new User('Tom', 17),new User('Bob', 20),new User('Den',25),
    new User('Jack',10)];


$control = new Control;
$adultUsers = $control->under($users);
var_dump($adultUsers);