<?php
$items = [
    [
        'first_name' => 'Denis',
        'last_name' => 'Cors',
        'phone' => '095-555-55-33',
        'email' => 'aa@aa.com',
    ],
    [
        'first_name' => 'Olga',
        'last_name' => 'Webs',
        'phone' => '095-222-33-44',
    ],
    [
        'first_name' => 'Anna',
        'last_name' => 'Vazhlivtseva',
        'phone' => '+38(095)222-33-44',
        'email' => '',
    ],
    [
        'first_name' => 'Alexandr',
        'last_name' => 'Burmistrov',
        'phone' => '+38(095)2223344',
        'email'=> 'ahaha@gmail.com',
    ],
    [
        'first_name' => 'Alexandradaa',
        'last_name' => 'Burmistrovsdfsd',
        'phone' => '+38(095)2223344',
        'email' => 'aa@aa.com'
    ]
];

echo "+-------------------------------------------------------------+\n";
$highest = [];
for ($i = 0; $i < count($items); $i++) {
    foreach ($items[$i] as $key => $value) {
        if (strlen($items[$i][$key]) > @$highest[$key]) {
            $highest[$key] = strlen($items[$i][$key]);
        }
    }
}



$array = [];
for ($i = 0; $i < count($items); $i++) {
    foreach ($items[$i] as $key => $value) {
        if ($highest[$key] >= strlen($value)) {
            echo $value . str_repeat("_", $highest[$key] - strlen($value)) . '|';
        }

        else {
            echo $value . '|';
        }
    }
    echo "\n\r";
}

echo "+-------------------------------------------------------------+";
echo "\n";
echo "\n";