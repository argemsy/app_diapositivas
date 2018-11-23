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

    static public function mvc()
    {
        !empty(Request::get_controller()) ? $accion = Request::get_controller() : $accion = 'index';

        is_file('controller/'.$accion.'/'.$accion.'Controller.php') ? include 'controller/'.$accion.'/'.$accion.'Controller.php' : include 'controller/error/errorController.php' ;
    }
}

?>