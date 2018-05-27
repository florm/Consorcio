<?php

class Model_Consorcio extends Model
{
    function __construct()
    {
       parent::__construct();
    }

    function crear($nombre,$cuit,$dirCalle,$dirNumero,$codPost,$telefono,$email){
        $sql = "INSERT INTO consorcio(nombre, cuit, dirCalle, dirNumero, codPost, telefono, email)
                VALUES ('$nombre', '$cuit', '$dirCalle', '$dirNumero', '$codPost', '$telefono', '$email')";
        
        $this->db->ejecutar($sql);

        $this->db->cerrarConexion( $this->db);

    }

    function listarConsorcio(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC ";
         return $this->db->ejecutar($sql);




    }
}