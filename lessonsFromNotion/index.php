<?php

$inputText = "<sasdasd<<<<>>>{}[[[]][ASDKAksdkasdmasdasmndas{{}{}>";
function result($inputText)
{
    $startPattern = ['<','>','[',']','{','}','(',')'];
    $goodPattern = ['<>','[]','{}','[]'];
    $splitToArray = str_split($inputText);
    $compareArray = str_ireplace($startPattern,'find',$splitToArray);
    $difference = array_diff_assoc($splitToArray,$compareArray);

    for ($i = 0; $i <= count($difference); $i++) {
        if ($goodPattern[$i]==current($difference) && next($difference));
        {

            echo 'Find!';
        }

    }
    var_dump($difference);

}
 result($inputText);