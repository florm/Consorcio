<?php
include_once ('./helpers/conexion.php');

class Model
{
    protected $conn;

    function __construct()
    {
        $this->conn = new Conexion("127.0.0.1:3307","root","","controlprop");
    }

    public function get_data(){
    }
}