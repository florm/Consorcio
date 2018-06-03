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
        $propiedad = $this->db->ultimoId();

        $sqlPropiedad="SELECT * FROM propiedad WHERE id= '$propiedad'";
        $resultado = $this->db->ejecutar($sqlPropiedad);
        return $this->db->traerFila($resultado);



    }

    function listarConsorcio(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC ";
        $data=  $this->db->ejecutar($sql);
        return $data;
    }

    function insertarPropietario($idPropietario,$idPropiedad){
    
        $sql = "UPDATE propiedad SET idPropietario='$idPropietario' WHERE id='$idPropiedad'";
        $this->db->ejecutar($sql);
        $this->db->cerrarConexion();

    }

    function listarPropiedades($idConsorcio){
        $sql = "SELECT * FROM propiedad WHERE idConsorcio = '$idConsorcio' ORDER BY piso ASC ";
        $resultado = $this->db->ejecutar($sql);
        $data = array();
        while($fila = mysqli_fetch_array($resultado)){
            $subarray = array();
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="piso">'.$fila["piso"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="depto">'.$fila["depto"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="porcentajeParticipacion">'.$fila["porcentajeParticipacion"].'</div>';
            $subarray[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$fila['id'].'">Borrar</button>';
            $data[] = $subarray;
        }
        $data = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => mysqli_num_rows($resultado),
            "recordsFilter" => mysqli_num_rows($resultado),
            "data" => $data
        );

        echo json_encode($data);
    }

    function traerPropiedades($idPropietario){
        $sql = "SELECT * FROM propiedad WHERE idPropietario = '$idPropietario'";
        $resultado = $this->db->ejecutar($sql);
        $fila = mysqli_fetch_all($resultado);
        return $fila;
    }
}