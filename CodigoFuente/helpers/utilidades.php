<?php
include_once ('helpers/conexion.php');

class Utilidades
{
    static function getGet($alias){
        return $_GET[$alias];
    }

    static function getPost($alias){
        return $_POST[$alias];
    }

    static function getCoordenadas($dirCalle, $dirNumero, $codPost, $idProvincia,$idCiudad, $pais){
        $provincia = Utilidades::getNombreProvincia($idProvincia);
        $ciudad =  Utilidades::getNombreCiudad($idCiudad);

        $direccion = "$dirCalle . ' ' . $dirNumero . ' ' . $codPost . ' ' .$ciudad . ' ' .$provincia . ' ' . $pais";
        $direccion = str_replace(" ", "+", $direccion); // replace all the white space with "+" sign to match with google search pattern

        $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$direccion";

        $response = file_get_contents($url);

        $json = json_decode($response,TRUE); //generate array object from the response from the web

        $coordenadas['lat']= $json['results'][0]['geometry']['location']['lat'];
        $coordenadas['lng'] = $json['results'][0]['geometry']['location']['lng'];
        return $coordenadas;

    }

    static function getProvincias(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM provincia";
        return $conexion->ejecutar($sql);
    }



    function getNombreProvincia($idProvincia){
        $conexion = new Conexion();
        $sql = "SELECT nombre FROM provincia WHERE id = '$idProvincia'";
        $resultado = $conexion->ejecutar($sql);
        return $conexion->traerCampo($conexion->traerFila($resultado),'nombre');
    }
    function getNombreCiudad($idCiudad){
        $conexion = new Conexion();
        $sql = "SELECT nombre FROM ciudad WHERE id = '$idCiudad'";
        $resultado = $conexion->ejecutar($sql);
        return $conexion->traerCampo($conexion->traerFila($resultado),'nombre');
    }
    static function getOperadores(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM usuario WHERE idRol = 3";
        $resultado = $conexion->ejecutar($sql);
        return $resultado;

    }

}