<?php
include_once ('./application/model/model_propiedad.php');
include_once ('./application/model/model_reclamo.php');
class Model_Main extends Model{

    public $propiedad;
    public $reclamo;
    function __construct()
    {
        parent::__construct();
        $this->propiedad = new Model_Propiedad();
        $this->reclamo = new Model_Reclamo();
    }

    function listarConsorcioDeOperador($idOperador){
        $sql = "SELECT * FROM consorcio WHERE idOperador = '$idOperador' ORDER BY nombre ASC";

        $data=  $this->db->ejecutar($sql);

        while($fila = mysqli_fetch_assoc($data)) {
            $consorcios[] = $fila;
        }

        return json_encode($consorcios);

    }
    function listarConsorcios(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC";

        $data=  $this->db->ejecutar($sql);

        while($fila = mysqli_fetch_assoc($data)) {
            $consorcios[] = $fila;
        }

        return json_encode($consorcios);

    }

    function getConsorcioEnUsoNombre(){
        $data = $_SESSION['nombreConsorcioEnUso'];
        return json_encode($data);
    }

    function cambiarConsorcio($id, $nombreConsorcio){

        $this->sesion->add("idConsorcioEnUso", $id);
        $this->sesion->add("nombreConsorcioEnUso", $nombreConsorcio);
        return $id;
    }

    function getNombreConsorcio($id){
        $sql = "SELECT nombre FROM consorcio WHERE id= '$id'";
        $resultado = $this->db->ejecutar($sql);
        while($fila = mysqli_fetch_assoc($resultado)){
            echo($fila['nombre']);
        }

    }

    function verEstadoPropiedad($idPropietario){
        return $this->propiedad->verEstadoPropiedad($idPropietario);

    }

    function buscarReclamos($idPropietario){
        return $this->reclamo->buscarReclamos($idPropietario);
    }
}