<?php 
namespace App;

class Autoload 
{
    static function register(){
        spl_autoload_register([
            __CLASS__ ,
            'autoloader'
        ]);
    }

    

    static function autoloader($class){
        $class = str_replace(__NAMESPACE__. '\\', '/' , $class);

        $class = str_replace('\\','/',$class);

        include_once __DIR__. '/' . $class . '.php' ;

    }
}