<?php

class Model_Consorcio extends Model
{
    function __construct()
    {
       parent::__construct();
    }

    function crear($nombre,$cuit,$dirCalle,$dirNumero,$codPost,$telefono,$email,$coordGoogle){
        $sql = "INSERT INTO consorcio(nombre, cuit, dirCalle, dirNumero, codPost, telefono, email, coordGoogle)
                VALUES ('$nombre', '$cuit', '$dirCalle', '$dirNumero', '$codPost', '$telefono', '$email', '$coordGoogle')";
        
        $this->db->ejecutar($sql);

        $this->db->cerrarConexion( $this->db);

    }
}