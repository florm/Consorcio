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

        $sql = "SELECT * FROM reclamo r JOIN propiedad p on r.idPropiedad = p.id JOIN consorcio c ON p.idConsorcio = c.id
            WHERE c.id = '$idConsorcio'";

        $resultado = $this->db->ejecutar($sql);

        $data = array();
        while($fila = mysqli_fetch_array($resultado)){
            $subarray = array();
            $subarray[] = '<div class="update text-uppercase" data-id="'.$fila["id"].'" data-column="idPropiedad">'.$fila["piso"]." ".$fila["depto"].'</div>';
            $subarray[] = '<div class="update" data-id="'.$fila["id"].'" data-column="descripcion">'.$fila["descripcion"].'</div>';
            $subarray[] = '<div class="update" data-id="'.$fila["id"].'" data-column="estado">'.$fila["estado"].'</div>';
            $subarray[] = '<div class="d-flex flex-row justify-content-around"><button type="button" name="aceptar" class="btn btn-success btn-xs aceptar" id="'.$fila[0].'">Aceptar</button><button type="button" name="rechazar" class="btn btn-danger btn-xs rechazar" id="'.$fila[0].'">Rechazar</button></div>';
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
        //$this->db->cerrarConexion();
    }

    function registrarGasto($fecha, $concepto, $importe, $idReclamo, $idProveedor){
        $sql = "INSERT INTO gasto(fecha, concepto, importe, idReclamo, idProveedor)
                VALUES ('$fecha', '$concepto', '$importe', '$idReclamo', '$idProveedor')";

        $this->db->ejecutar($sql);
    }

    function buscarReclamos($idPropietario){
        $sql = "SELECT * FROM reclamo r JOIN propiedad p on r.idPropiedad = p.id 
            WHERE p.idPropietario = $idPropietario";
        $resultado = $this->db->ejecutar($sql);
        $cantidadTotal = $this->db->cantidadFilas($resultado);

        $sql2 = "SELECT * FROM reclamo r JOIN propiedad p on r.idPropiedad = p.id 
            WHERE p.idPropietario = $idPropietario AND r.estado = 'Aceptado'";
        $resultado2 = $this->db->ejecutar($sql2);
        $cantidadAceptados = $this->db->cantidadFilas($resultado2);

        $reclamos = array();
        $reclamos['cantidadTotal'] = $cantidadTotal;
        $reclamos['cantidadAceptados'] = $cantidadAceptados;

        return $reclamos;
    }
   
}

?>