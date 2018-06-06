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

    function eliminarProveedor($id){
        $sql = "DELETE FROM proveedor WHERE id='$id'";
        $this->db->ejecutar($sql);
    }

}

?>