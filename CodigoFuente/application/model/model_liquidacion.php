<?php 

class Model_Liquidacion extends Model
{
	
	function __construct()
    {
       parent::__construct();
    }

    function liquidar($idConsorcio, $arrayPeriodo, $fecha, $periodo){
        // ------------- se crea la liquidacion para el consorcio
    	$sql = "INSERT INTO liquidacion (periodo, fecha, idConsorcio)
                VALUES ('$periodo', '$fecha', '$idConsorcio')";
        $result = $this->db->ejecutar($sql);
        $idLiquidacion = $this->db->ultimoId();



        // -------------- se buscan los gastos del periodo para ese consorcio uniendo reclamo y propiedad para buscar solo
        //aquellos reclamos de propiedades que pertenecen a ese consocio
        $sql2 = "SELECT * FROM gasto g
                            JOIN reclamo r ON g.idReclamo = r.id
                            JOIN propiedad p ON r.idPropiedad = p.id
        WHERE p.idConsorcio = '$idConsorcio'
        AND MONTH(g.fecha) = '$arrayPeriodo[1]' AND YEAR(g.fecha) = $arrayPeriodo[0]";

        $result2 = $this->db->ejecutar($sql2);
        $listaDeGastos = mysqli_fetch_all($result2);
        $gastoPorReclamo = 0;
        // ----------------------------
        foreach ($listaDeGastos as $gasto) {
        	$sql3 = "INSERT INTO liqgasto (idLiquidacion, idGasto)
                VALUES ('$idLiquidacion', '$gasto[0]')"; //gasto[0] representa el id del gasto
            $this->db->ejecutar($sql3);
            $gastoPorReclamo += $gasto[3];
        }


        $this->generarGastoDeAdmnistracion($fecha,$gastoPorReclamo,$idLiquidacion);
        $importeTotal = $this->generarImporteTotalLiquidacion($idLiquidacion);

        // ----------------------------
        $sql4 = "UPDATE liquidacion SET importeTotal='$importeTotal' WHERE id='$idLiquidacion'";
        $result4 = $this->db->ejecutar($sql4);

        // ----------------------------
        $sql5 = "SELECT * FROM propiedad WHERE idConsorcio = '$idConsorcio'";
        $result5 = $this->db->ejecutar($sql5);
        $listaDePropiedades = mysqli_fetch_all($result5);

        $importe = 0;
        
        //Calculo de fecha de vencimiento
        $nuevafecha = date($fecha);
        $fechaVencimiento = strtotime ( '+1 month' , strtotime ( $nuevafecha ) ) ;
        $fechaVencimiento = date ( 'Y-m-j' , $fechaVencimiento );

        foreach ($listaDePropiedades as $propiedad) {
            $porcentajeParticipacion = $propiedad[3];
            $importe = ( $porcentajeParticipacion * $importeTotal) / 100;

            $sql6 = "INSERT INTO expensa (idLiquidacion, idPropiedad, importe, fechaVencimiento)
                VALUES ('$idLiquidacion', '$propiedad[0]', '$importe', '$fechaVencimiento')"; 

            $this->db->ejecutar($sql6);
        }

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

    function buscarNombreConsorcio($idConsorcio){
        $sql = "SELECT * FROM consorcio 
                        WHERE id = '$idConsorcio'";
        $resultado = $this->db->ejecutar($sql);
        return $this->db->traerCampo($this->db->traerFila($resultado),'nombre');
    }

    function generarGastoDeAdmnistracion($fecha, $gastoPorReclamo, $idLiquidacion){
        $gastoAdministracion = $gastoPorReclamo * 0.2; //se calcula el 20% de los gastos por reclamo que sera la ganancia de la admin
        $sql = "INSERT INTO gasto(fecha, concepto, importe) VALUES('$fecha','Gastos de Administracion',$gastoAdministracion)";
        $this->db->ejecutar($sql);
        $idGasto = $this->db->ultimoId();

        $sql2 = "INSERT INTO liqgasto (idLiquidacion, idGasto)
                VALUES ('$idLiquidacion', '$idGasto')";
        $this->db->ejecutar($sql2);
    }

    function generarImporteTotalLiquidacion($idLiquidacion)
    {
        $gastoTotal = 0;
        $sql = "SELECT g.importe FROM liqGasto lg JOIN gasto g on lg.idGasto = g.id WHERE idLiquidacion = '$idLiquidacion'";
        $resultado = $this->db->ejecutar($sql);
        $listaDeGastos = mysqli_fetch_all($resultado);

        foreach ($listaDeGastos as $gasto) {
            $gastoTotal += $gasto[0];
        }
        return $gastoTotal;
    }

    function crearTablaDetalleLiquidacion($idLiquidacion){
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
        return $data;
    }

}


 ?>