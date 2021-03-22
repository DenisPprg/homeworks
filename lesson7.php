<?php

$people = file_get_contents('people.txt');
$lines = explode("\n",$people);

$highest = [];

echo '______________________________'. "\n";
for ($i = 0; $i < count($lines); $i++) {
    $line = str_replace(';', ' ', $lines[$i]) . "\n";
    $peoples = explode(" ", $line);
    foreach ($peoples as $key => $value) {
        if (strlen($peoples[$key]) > @$highest[$key]) {
            $highest[$key] = strlen($peoples[$key]);
        }
    }
if (strlen(@$peoples[1])>0) {
    echo "|";
    echo str_pad($peoples[0], 8, " ") . "|" . str_pad(@$peoples[1], 9, " ") . "|" .
        str_pad(@$peoples[2], 3, " ") . "|" .$peoples[3];

}
}
echo '------------------------------'. "\n";

/*Знаю, что не совсем верно,
обязательно откорректирую
и добавлю усложнения    */
