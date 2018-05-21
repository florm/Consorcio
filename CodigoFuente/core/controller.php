<?php
include_once ('./helpers/sesion.php');

class Controller {

    public $model;
    public $view;
    protected $sesion;

    function __construct(){
        $this->view = new View();
        $this->sesion = new Sesion();
    }

    function action_index(){
    }
}