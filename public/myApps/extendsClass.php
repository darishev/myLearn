<?php

class extendsClass extends ClassLearn{
    public static function outInfos()
    {
        $infosExtended = parent::outInfos();
        echo $infosExtended . ' dДанный список добавлен через наследование';
    }
}