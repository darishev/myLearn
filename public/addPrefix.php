<?php
    $names = ['john', 'smith', 'karl'];

     function addPrefix($names,$prefix = null)
     {
         if(isset($names) and $prefix)
         {
             for ($i = 0; $i < count($names); $i++) {
                 $newNames= "{$prefix} {$names[$i]}";
                 print_r($newNames . '<br>');
             }
         }
         else
         {
                return print 'Префикс отсуствует';
         }
     }

     addPrefix($names,'Mr');

