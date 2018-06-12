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
}

?>