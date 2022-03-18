<?php

$newArray = [2,3,6,7,1,3,5];

    function bubleSort($arraySort){

        $size = count($arraySort)-1;
        for ($i=0; $i<$size; $i++) {
            for ($s=0; $s<$size-$i; $s++) {
                $a = $s+1;
                if ($arraySort[$a] < $arraySort[$s]) {
                    $buffer = $arraySort[$a];
                    $arraySort[$a] = $arraySort[$s];
                    $arraySort[$s] = $buffer;
                    var_dump($arraySort);
                }
            }
        }
    }


    bubleSort($newArray);