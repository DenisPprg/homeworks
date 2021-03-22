<?php

$users = [
    [ 'name' => 'Alexandr', 'age' => 18],
    [ 'name' => 'Mikel', 'age' => 12],
    [ 'name' => 'Oleg', 'age' => 11],
    [ 'name' => 'Paulin', 'age' => 20],
    [ 'name' => 'Smithie', 'age' => 38],
    ];

function myCountMassive($users){
/*    if(is_null($users))
        return 0;
    if(!is_array($users))
        return 1;
Необязательная проверка на массив
*/
    $cnt = 0;
    foreach($users as $val){
        $cnt++;
    }
    return $cnt;
}


for ($z=0; $z<myCountMassive($users); $z++) {
    $name = $users[$z]['name'];
    $age = $users[$z]['age'];
    $len = strlen($name);
    echo 'Юзеру '. $name. ' - '.$age. ' лет,'. 'длина имени - '.$len. "\n";
}

echo 'Выведем пользователей в зависимости от длины их имени:'. "\n";
usort($users, function($a,$b){
    return (strlen($a['name'])-strlen($b['name']));
});

foreach ($users as $user=>$val){
    $name = $val['name'];
    $age = $val['age'];
    echo 'Юзеру '.$val['name']. '-'. $age. ' лет.';
    echo "\n";
}