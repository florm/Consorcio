<?php

class Model_Proveedor extends Model
{
    function __construct()
    {
       parent::__construct();
    }

    function crear($nombre, $cuit, $telefono){
        $sql = "INSERT INTO proveedor(nombre, cuit, telefono)
                VALUES ('$nombre', '$cuit', '$telefono')";

        $this->db->ejecutar($sql);
    }

    function listarProveedor(){
        $sql = "SELECT * FROM proveedor ORDER BY nombre ASC ";

        $data=  $this->db->ejecutar($sql);

        return $data;
    }

    function getProveedor(){
        $sql = "SELECT * FROM proveedor";
        $resultado = $this->db->ejecutar($sql);

        $fila = mysqli_fetch_all($resultado);

        return $fila;
    }
}

?>