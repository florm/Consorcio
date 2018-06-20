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

        $gastoTotal = 0;

        $sql2 = "SELECT * FROM gasto g
                            JOIN reclamo r ON g.idReclamo = r.id
                            JOIN propiedad p ON r.idPropiedad = p.id
        WHERE p.idConsorcio = '$idConsorcio'
        AND MONTH(g.fecha) = '$arrayPeriodo[1]' AND YEAR(g.fecha) = $arrayPeriodo[0]";

        $result2 = $this->db->ejecutar($sql2);
        $listaDeGastos = mysqli_fetch_all($result2);

        foreach ($listaDeGastos as $gasto) {
        	$sql3 = "INSERT INTO liqgasto (idLiquidacion, idGasto)
                VALUES ('$idLiquidacion', '$gasto[0]')"; //gasto[0] representa el id del gasto
            $this->db->ejecutar($sql3);
            $gastoTotal = $gastoTotal + $gasto[3];
        }

        $sql4 = "UPDATE liquidacion SET gastoTotal='$gastoTotal' WHERE id='$idLiquidacion'";
        $result4 = $this->db->ejecutar($sql4);

        //TEST DE CONSULTA POR MES Y AÑO RECIBIENDO UN ARRAY
        //$sql = "SELECT * FROM reclamo WHERE MONTH(fecha) = '$arrayPeriodo[1]' AND YEAR(fecha) = $arrayPeriodo[0]";
    	//$result = $this->db->ejecutar($sql);
        //$fila = mysqli_fetch_all($result);
        //var_dump($fila);
    }

    function listarLiquidaciones($idConsorcio){
        $sql = "SELECT * FROM liquidacion WHERE idConsorcio = '$idConsorcio'";
        $data =  $this->db->ejecutar($sql);
        return $data;
    }

    function verDetallesLiquidacion($idLiquidacion){
        $sql = "SELECT * FROM gasto g
                        JOIN liqgasto lg ON g.id = lg.idGasto
                        JOIN liquidacion l ON lg.idLiquidacion = l.id
                        WHERE l.id = '$idLiquidacion'";

        $resultado = $this->db->ejecutar($sql);
        $data = array();
        while($fila = mysqli_fetch_array($resultado)){
            $subarray = array();

            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="fecha">'.$fila["fecha"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="concepto">'.$fila["concepto"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="importe">'.$fila["importe"].'</div>';
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

}


 ?>