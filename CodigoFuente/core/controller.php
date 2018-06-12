<?php
include_once ('./helpers/sesion.php');
include_once ('./helpers/utilidades.php');
class Controller {

    public $model;
    public $view;
    protected $sesion;


    function __construct(){
        $this->view = new View();
        $this->sesion = new Sesion();
    }

    function validarSesion(){
        if(empty($this->sesion->get('login')))
            header('Location: /');
    }
}