<?php

$y = 1;

$fn1 = fn($x) => $x - $y + $x;
// эквивалентно использованию $y по значению:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
?>