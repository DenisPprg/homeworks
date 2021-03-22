<?php

$users = [
[ 'name' => 'Alexandrio', 'age' => rand(1,99)],
[ 'name' => 'Mikel', 'age' => rand(1,99)],
[ 'name' => 'Olegha', 'age' => rand(1,99)],
[ 'name' => 'Paulina', 'age' => rand(1,99)],
[ 'name' => 'Smithiei', 'age' => rand(1,99)],
];

include 'lesson6_func.php';

$highest = [];
for ($i = 0; $i < myCountMassive($users); $i++) {
    foreach ($users[$i] as $key => $value) {
        if (strlen($users[$i][$key]) > @$highest[$key]) {
            $highest[$key] = strlen($users[$i][$key]);
        }
    }
}

echo '________________'. "\n";
echo '|'. str_pad('Name', 10).'|'. 'Age'.'|'. "\n";
echo '----------------'. "\n";

for ($i = 0; $i < myCountMassive($users); $i++) {
    foreach ($users[$i] as $key => $value) {
        comp($highest[$key], $value);
    }
    echo ' |'. "\n";
}
echo '----------------'. "\n";
