<?php

$users = [
    [ 'name' => 'Alexandr', 'age' => 18],
    [ 'name' => 'Mikel', 'age' => 12],
    [ 'name' => 'Oleg', 'age' => 11],
    [ 'name' => 'Paulin', 'age' => 20],
    [ 'name' => 'Smithie', 'age' => 38],
];

/* Напишем собственную функцию, аналог 'Count',
было желание поместить функцию в отдельный файл
 и добавить через 'include', но, к сожалению,
мы можем добавлять только 1 файл в Д/З.
 */

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

echo 'Выводим пользователей в зависимости от длины их имени:'. "\n";
/*function BSort(strlen($a['name']), strlen($b['name'])) {
    if (strlen($a['name']) > strlen($b['name'])) {
        return -1;
    } else if (strlen($a['name']) > strlen($b['name'])) {
        return 1;
    } else {
        return 0;
    }

}*/

for ($z=0; $z<myCountMassive($users); $z++) {
    $name = $users[$z]['name'];
    $age = $users[$z]['age'];
    $len = strlen($name);
    echo 'Юзеру '. $name. ' - '.$age. ' лет,'. 'длина имени - '.$len. "\n";
}
