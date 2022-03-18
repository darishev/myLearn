<?php
$names = ['john', 'smith', 'karl'];

 function swap ($names,$index)
    {
        if (isset($names[$index-1]) and isset($names[$index+1]) )
        {
            $tempData = $names;
            $names[$index-1] = $tempData[$index+1];
            $names[$index+1] = $tempData[$index-1];
            var_dump($names);
        }
        else
        {
         var_dump($names);
         }
    };


$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']

$result = swap($names, 0);
print_r($result); // => ['john', 'smith', 'karl']