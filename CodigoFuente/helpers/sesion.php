<?php

class Sesion{

    function start(){
        session_start();
    }

    function add($key, $valor){
        $_SESSION[$key] = $valor;
    }

    function get($key){
        return (!empty($_SESSION[$key])) ? $_SESSION[$key] : null;
    }

    function borrarSesion(){
        session_unset();
        session_destroy();
    }
}
?>