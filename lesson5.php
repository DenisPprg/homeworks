<?php

$users = [
    [ 'name' => 'Alexandrio', 'age' => 18],
    [ 'name' => 'Mikel', 'age' => 12],
    [ 'name' => 'Olegha', 'age' => 11],
    [ 'name' => 'Paulina', 'age' => 20],
    [ 'name' => 'Smithiei', 'age' => 38],
];

include 'func_file.php';

for ($z=0; $z<myCountMassive($users); $z++) {


            $name = $users[$z]['name'];
            $age = $users[$z]['age'];
            $len = strlen($name);
            echo 'Юзеру ' . $name . ' - ' . $age . ' лет,' . 'длина имени - ' . $len . "\n";

}


