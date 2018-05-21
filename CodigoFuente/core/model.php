<?php
include_once ('./helpers/conexion.php');
include_once ('./helpers/sesion.php');

class Model
{
    protected $conn;
    protected $sesion;

    function __construct()
    {
        $this->conn = new Conexion("127.0.0.1:3307","root","","controlprop");
        $this->sesion = new Sesion();
    }

    public function get_data(){
    }
}