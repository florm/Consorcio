<?php

/**
 * Created by PhpStorm.
 * User: Flor
 * Date: 21/05/2018
 * Time: 18:21
 */
class Model_Rol extends Model
{
    private $id;
    private $nombre;


    function __construct($id, $nombre)
    {
        parent::__construct();
        $this->id = $id;
        $this->nombre = $nombre;
    }

    function buscarRol($nombre){
        $sql = "SELECT id FROM rol WHERE" . " " . "nombre = '$nombre'";
        $resultado = $this->conn->consulta($sql);
        if(!$this->conn->cantidadFilas($resultado)){
            $rol = $this->conn->traerFila($resultado);
            return new Rol($rol['id'], $rol['nombre']);
        }

    }

}