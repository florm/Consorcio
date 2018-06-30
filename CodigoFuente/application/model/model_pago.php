<?php

class Model_Pago extends Model
{

	function __construct()
    {
       parent::__construct();

    }

    function guardarPago($importe, $fecha, $idPropiedad, $idExpensa){
	    $sql = "INSERT INTO pago (importe, fecha, idPropiedad, idExpensa) VALUES ('$importe','$fecha','$idPropiedad','$idExpensa')";
        $this->db->ejecutar($sql);
    }


}   

 ?>