<?php

function myCountMassive($array){
    /*    if(is_null($users))
            return 0;
        if(!is_array($users))
            return 1;
    Необязательная проверка на массив
    */
    $cnt = 0;
    foreach($array as $val){
        $cnt++;
    }
    return $cnt;
}

function comp($a, $b) {
    if ($a >= strlen($b)) {
        echo '|'.$b . str_repeat(" ", $a - strlen($b));
        return;
    }
    if ($a < strlen($b)) {
        echo $b . '|';
        return;
    }
}