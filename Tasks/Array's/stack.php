<?php
$inputText = '<ajsdjasdjajsdajsd(asdkaksdaksdkas>>>>asdjajsd';


function checkArray($inputText)
    {

        $searchSymbol = ['<','{','(','<'];
        $goodResult = ['<>','{}','(','<'];

        for ($i = 0; $i <= strlen($inputText); $i++) {
            print(substr($inputText, $i));
        }
    }