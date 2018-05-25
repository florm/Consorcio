<?php

/**
 * Created by PhpStorm.
 * User: Flor
 * Date: 22/05/2018
 * Time: 20:53
 */
class model_tipoDocumento extends Model
{

    private $id;
    private $nombre;
    private $listaTipos = [];

    function __construct()
    {
        parent::__construct();

    }

    function getTiposDocumento(){
        $sql = "SELECT * FROM tipodocumento";
        $resultado = $this->db->ejecutar($sql);
        //while($fila = mysqli_fetch_assoc(($resultado))){
          //  echo($fila['id']."". $fila['nombre']."<br>" );
        //}

        $fila = mysqli_fetch_all($resultado);

        return $fila;
    }

}