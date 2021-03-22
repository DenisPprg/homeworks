<?php

function myCountMassive($users ){
    $cnt = 0;
    foreach($users as $val){
        $cnt++;
    }
    return $cnt;
}


function sort_arrays (array $array)
{
    for ($z = 0; $z < count($array); $z++) {
        for ($i = 0; $i < count($array) - $z - 1; $i++) {
            if (strlen($array[$i]['name']) < strlen($array[$i + 1]['name'])) {
                $case = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $case;
            }
        }
    }
    return $array;
}

/*function myCount($array){
    $i = 0;
    foreach ($array as $v){
        $i++
    }
    return $i;
}
count - альтернатива
*/