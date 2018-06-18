<?php 

class Model_Liquidacion extends Model
{
	
	function __construct()
    {
       parent::__construct();
    }

    function liquidar($idConsorcio, $arrayPeriodo, $fecha, $periodo){

    	$sql = "INSERT INTO liquidacion (periodo, fecha, idConsorcio)
                VALUES ('$periodo', '$fecha', '$idConsorcio')";

        $result = $this->db->ejecutar($sql);

        //TEST DE CONSULTA POR MES Y AÑO RECIBIENDO UN ARRAY
        //$sql = "SELECT * FROM reclamo WHERE MONTH(fecha) = '$arrayPeriodo[1]' AND YEAR(fecha) = $arrayPeriodo[0]";
    	//$result = $this->db->ejecutar($sql);
        //$fila = mysqli_fetch_all($result);
        //var_dump($fila);
    }





}


 ?>