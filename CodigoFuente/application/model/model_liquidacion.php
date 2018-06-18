<?php 

class Model_Liquidacion extends Model
{
	
	function __construct()
    {
       parent::__construct();
    }

    function prueba($idConsorcio, $periodo, $fecha){
    	//$sql = "SELECT * FROM tabla WHERE MONTH(colfecha) = 10 AND YEAR(colfecha) = 2016"

    	$sql = "INSERT INTO liquidacion (periodo, fecha, idConsorcio)
                VALUES ('$periodo', '$fecha', '$idConsorcio')";

        $this->db->ejecutar($sql);
    }





}


 ?>