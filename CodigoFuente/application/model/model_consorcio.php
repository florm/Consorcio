<?php

class Model_Consorcio extends Model
{
    function __construct()
    {
       parent::__construct();
    }

    function crear($nombre,$cuit,$idProvincia, $idCiudad, $pais, $dirCalle,$dirNumero,$codPost,$telefono,$email, $idOperador, $lat, $lng){
        $sql = "INSERT INTO consorcio(nombre, cuit, idProvincia, idCiudad, pais, dirCalle, dirNumero, codPost, telefono, email,
                idOperador, lat, lng)
                VALUES ('$nombre','$cuit','$idProvincia', '$idCiudad', '$pais', '$dirCalle','$dirNumero','$codPost','$telefono'
                ,'$email', '$idOperador', '$lat', '$lng')";
                
        $this->db->ejecutar($sql);
        $idConsorcio = $this->db->ultimoId();
        return $idConsorcio;
    }

    function listarConsorcio(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC ";

         $data=  $this->db->ejecutar($sql);

        return $data;
    }

    function getConsorcio(){
        $sql = "SELECT * FROM Consorcio";
        $resultado = $this->db->ejecutar($sql);

        $fila = mysqli_fetch_all($resultado);
        return $fila;
    }
}