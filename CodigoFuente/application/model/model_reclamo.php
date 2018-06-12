<?php 

class Model_Reclamo extends Model
{
	
	function __construct()
    {
       parent::__construct();
    }

    function cargarReclamo($idPropiedad, $descripcion, $fecha, $estado){
    	$sql = "INSERT INTO reclamo (descripcion, estado, fecha, idPropiedad)
                VALUES ('$descripcion', '$estado', '$fecha', '$idPropiedad')";

        $this->db->ejecutar($sql);
    }

    function listarReclamos($idConsorcio){

        $sql = "SELECT * 
                FROM reclamo
                WHERE idPropiedad IN (SELECT id
                                        FROM propiedad
                                        WHERE idConsorcio='$idConsorcio')";

        $resultado = $this->db->ejecutar($sql);
        $data = array();
        while($fila = mysqli_fetch_array($resultado)){
            $subarray = array();

            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="idPropiedad">'.$fila["idPropiedad"].'</div>';
            //$subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="descripcion">'.$fila["descripcion"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="descripcion">'.$fila["descripcion"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="estado">'.$fila["estado"].'</div>';
            $subarray[] = '<div class="d-flex flex-row justify-content-around"><button type="button" name="aceptar" class="btn btn-success btn-xs aceptar" id="'.$fila['id'].'">Aceptar</button><button type="button" name="rechazar" class="btn btn-danger btn-xs rechazar" id="'.$fila['id'].'">Rechazar</button></div>';

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

    function rechazarReclamo($idReclamo){
        $sql = "UPDATE reclamo SET estado='Rechazado' WHERE id='$idReclamo'";
        $this->db->ejecutar($sql);
        //$this->db->cerrarConexion();
    }

    function aceptarReclamo($idReclamo){
        $sql = "UPDATE reclamo SET estado='Aceptado' WHERE id='$idReclamo'";
        $this->db->ejecutar($sql);
    }


}

?>