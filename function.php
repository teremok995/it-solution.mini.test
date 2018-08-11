<?php

function digits($n) {
    $i = -1;
    if ($n < 0) $n = -$n;
    while ($n > 0) {
        (int)$n = (int)$n/10;
        $i += 1;
    }
    return $i;
}

function getNumber($int = 100){
    $i = 0;
    $count = 0;
    while($count < $int){
        $i++;
        if($i % digits($i) == 0){
             echo $i.", ";
            $count++;
        }   
    }
}
