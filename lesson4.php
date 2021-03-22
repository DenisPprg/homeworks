<?php

$people = file_get_contents('people.txt');
$lines = explode("\n", $people);
include 'lesson6_func.php';


foreach ($lines as $key => $value) {
    if ($key == 0) {
        $title[] = explode(";", $value);
    }
}
$title = array_values($title[0]);


foreach ($lines as $key => $value) {
    $content[] = explode(";", $value);
}

foreach ($content as $key => $item) {
    $content[] = array_values($item);
    if (false == empty($content[$key][0])) {
        $contentValues[] = array_combine($title, $content[$key]);
    }
}

for ($i = 0; $i < myCountMassive($contentValues); $i++) {
    foreach ($contentValues[$i] as $key => $value) {
        if (strlen($contentValues[$i][$key]) > @$title[$key]) {
            $title[$key] = strlen($contentValues[$i][$key]);
        }
    }
}

for ($i = 0; $i < myCountMassive($contentValues); $i++) {
    if ($contentValues[$i]['Age'] > 14) {
        foreach ($contentValues[$i] as $key => $value) {
            comp($title[$key], $value);
        }
        if ($contentValues[$i]['Age'] > 18) {
            echo '|' . 'Adult|' . "\n";
        } elseif ($contentValues[$i]['Age'] == 'Age') {
            echo '|Adult?   |' . "\n";
        } else {
            echo "|" . 'Not adult|' . "\n";
        }
    }
}

