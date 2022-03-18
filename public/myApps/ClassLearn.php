<?php

class ClassLearn
{
    public static $data;

    public static function writeFile($name,$lastname)
    {
        file_put_contents('tpl/list',$name . ' ' .$lastname. PHP_EOL, FILE_APPEND);
    }

    public static function outInfos()
    {
        self::$data = file_get_contents("tpl/list");
            return self::$data;

    }

public function obj(){

}
}