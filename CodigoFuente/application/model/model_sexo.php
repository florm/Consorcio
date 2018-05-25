<?php

/**
 * Created by PhpStorm.
 * User: Flor
 * Date: 22/05/2018
 * Time: 20:53
 */
class Model_Sexo extends Model
{

    private $id;
    private $nombre;
    private $listaTipos = [];

    function __construct()
    {
        parent::__construct();

    }

    function getSexo(){
        $sql = "SELECT * FROM sexo";
        $resultado = $this->db->ejecutar($sql);

        $fila = mysqli_fetch_all($resultado);

        return $fila;
    }

}