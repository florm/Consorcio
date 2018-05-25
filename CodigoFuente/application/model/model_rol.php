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


    function __construct()
    {
        parent::__construct();

    }

    function buscarRol($nombre){
        $sql = "SELECT * FROM rol WHERE" . " " . "nombre = '$nombre';";

        $resultado = $this->db->ejecutar($sql);

        if($this->db->cantidadFilas($resultado)){
            $fila = $this->db->traerFila($resultado);

            $this->id = $fila['id'];

        }
        return $this->id;

    }

}