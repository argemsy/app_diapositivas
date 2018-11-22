<?php

class Link 
{
    static public function ruta()
    {
        return 'http://localhost/mvc/';
    }

    static public function autoload()
    {
        spl_autoload_register(function($class){
            include 'model/'.$class.'.php';
        });
    }
}

?>