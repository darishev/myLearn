<?php

$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
$money2 = ['eur 10', 'usd 1', 'eur 5', 'rub 100', 'eur 20', 'eur 100', 'rub 200'];
$money3 = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];
function getTotalAmount ($moneyCount, $val)
{
    $sum = 0;
    foreach ($moneyCount as $key => $value)
    {
        if ($val === substr($moneyCount[$key], 0, 3))
         {
            $sum = $sum + substr($value, 4);
        }
    }
    return $sum . '<br>';
}


echo getTotalAmount($money1, 'usd') ;// 16


echo getTotalAmount($money2, 'eur');


echo getTotalAmount($money3, 'rub');// 270