<?php

$users = [
    [ 'name' => 'Alexandrio', 'age' => rand(1,99)],
    [ 'name' => 'Mikel', 'age' => rand(1,99)],
    [ 'name' => 'Olegha', 'age' => rand(1,99)],
    [ 'name' => 'Paulina', 'age' => rand(1,99)],
    [ 'name' => 'Smithiei', 'age' => rand(1,99)],
];

include 'lesson6_func.php';

$count = myCountMassive($users);
$max = null;

foreach($users as $k => $v)
{
    if($v['age'] > $max or $max === null)
    {
        $max = $v['age'];
    }
}

echo '<b>Всего пользователей:</b>'. " <i>$count</i> <br />";
echo '<strong>Возраст самого взрослого:</strong>'. " <em>$max</em>";