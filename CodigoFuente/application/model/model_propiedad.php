<?php

class Model_Propiedad extends Model
{
    function __construct()
    {
       parent::__construct();
    }



    function crear($piso,$depto,$porcentajeParticipacion,$idConsorcio){
        $sql = "INSERT INTO propiedad (piso,depto,porcentajeParticipacion,idConsorcio)
                VALUES ('$piso', '$depto', '$porcentajeParticipacion','$idConsorcio')";

        $this->db->ejecutar($sql);
        $this->db->cerrarConexion();

    }

    function listarConsorcio(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC ";

         $data=  $this->db->ejecutar($sql);

        return $data;




    }
}