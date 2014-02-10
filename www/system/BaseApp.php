<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Habib
 * Date: 10.02.14
 * Time: 13:59
 * To change this template use File | Settings | File Templates.
 */
class BaseApp
{
    public static function __autoload($class){
        if ($class){
            require_once $class.".php";
        }
    }
}
