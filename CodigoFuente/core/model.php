<?php
include_once ('./helpers/conexion.php');
include_once ('./helpers/sesion.php');

class Model
{
    protected $db;
    protected $sesion;

    function __construct()
    {
        $this->db = new Conexion();
        $this->sesion = new Sesion();
    }

    public function get_data(){
    }
}