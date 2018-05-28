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
        $idConsorcio = $this->db->ultimoId();
        return $idConsorcio;
    }

    function listarConsorcio(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC ";

         $data=  $this->db->ejecutar($sql);

        return $data;




    }
}