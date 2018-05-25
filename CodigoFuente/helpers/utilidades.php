<?php

class Utilidades
{
    static function getGet($alias){
        return $_GET[$alias];
    }

    static function getPost($alias){
        return $_POST[$alias];
    }

}