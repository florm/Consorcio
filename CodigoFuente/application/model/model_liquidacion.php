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
        $idLiquidacion = $this->db->ultimoId();

        $sql2 = "SELECT * FROM gasto WHERE MONTH(fecha) = '$arrayPeriodo[1]' AND YEAR(fecha) = $arrayPeriodo[0]";
        $result2 = $this->db->ejecutar($sql2);
        $listaDeGastos = mysqli_fetch_all($result2);

        foreach ($listaDeGastos as $gasto) {
        	$sql3 = "INSERT INTO liqgasto (idLiquidacion, idGasto)
                VALUES ('$idLiquidacion', '$gasto[0]')"; //gasto[0] seria el id del gasto
               $this->db->ejecutar($sql3);
        }

        //TEST DE CONSULTA POR MES Y AÑO RECIBIENDO UN ARRAY
        //$sql = "SELECT * FROM reclamo WHERE MONTH(fecha) = '$arrayPeriodo[1]' AND YEAR(fecha) = $arrayPeriodo[0]";
    	//$result = $this->db->ejecutar($sql);
        //$fila = mysqli_fetch_all($result);
        //var_dump($fila);
    }

}


 ?>