<?php
    $cities = ['moscow', 'london', 'berlin', 'porto', null];
    function get($cities,$index,$default = null){
        if($index < count($cities)){
            echo $cities[$index] .'<br>';
        }
        else
        {
            $cities[$index] = $default;
            echo $cities[$index];
        }
    };


    get($cities, 1); // london
    get($cities, 10, 'paris'); // paris
    get($cities, 4); // null
    get($cities, 4, 'default'); // null