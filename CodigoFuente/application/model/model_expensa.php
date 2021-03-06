<?php
include_once ('./application/model/model_liquidacion.php');
include_once ('./application/model/model_pago.php');
class Model_Expensa extends Model
{
	public $liquidacion;
	public $pago;
	function __construct()
    {
       parent::__construct();
       $this->liquidacion = new Model_Liquidacion();
       $this->pago = new Model_Pago();
    }

    function listarPropiedadesPropietario($idPropietario){
        //$sql = "SELECT * FROM propiedad WHERE idPropietario = '$idPropietario'";
    	$sql = "SELECT * FROM propiedad p JOIN consorcio c on p.idConsorcio = c.id WHERE idPropietario = '$idPropietario'";
        $data=  $this->db->ejecutar($sql);
        return $data;
    }

    function listar($idPropiedad){

        $sql = "SELECT * FROM expensa WHERE idPropiedad = '$idPropiedad'";

        // VER ERROR PARA PODER LISTAR EL PISO Y DEPTO DE LA PROPIEDAD
        // $sql = "SELECT * FROM reclamo r 
        //                 JOIN propiedad p ON r.idPropiedad = p.id
        //                 WHERE p.idConsorcio = '$idConsorcio";

        $resultado = $this->db->ejecutar($sql);

        $data = array();
        while($fila = mysqli_fetch_array($resultado)){
            $subarray = array();

            $subarray[] = '<div class="update" data-id="'.$fila["id"].'" data-column="importe">'.$fila["importe"].'</div>';
            //$subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="descripcion">'.$fila["descripcion"].'</div>';
            $subarray[] = '<div class="update" data-id="'.$fila["id"].'" data-column="fechaVencimiento">'.$fila["fechaVencimiento"].'</div>';
            $subarray[] = '<div class="d-flex flex-row justify-content-around">'.
                            '<button type="button" id="btnDetalles" name="verdetalles" class="btn btn-info btn-xs verdetalles" idLiquidacion="'.$fila['idLiquidacion'].'" idPropiedad="'.$fila['idPropiedad'].'">Ver</button>';
            if($fila['estado'] == 0){
                $subarray[] = '<button type="button" id="btnPagar" name="pagar" class="btn btn-danger btn-xs pagar"  idExpensa="'.$fila['id'].'">Pagar</button>
                           </div>';

            }
            else{
                $subarray[] = '<button type="button" id="btnPagado" name="pagar" class="btn btn-success btn-xs pagar" disabled>Pagado</button>
                           </div>';
            }

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

    function verDetalleExpensa($idPropiedad, $idLiquidacion){

        $tabla = $this->liquidacion->crearTablaDetalleLiquidacion($idLiquidacion);

        $totalLiquidacion = $this->liquidacion->generarImporteTotalLiquidacion($idLiquidacion);
        $filaLiquidacion = array();
        $filaLiquidacion[] = '<div class="bg-success text-white" ></div>';
        $filaLiquidacion[] = '<div class="bg-success text-white text-center p-2">Total Liquidacion</div>';
        $filaLiquidacion[] = '<div class="bg-success text-white text-center p-2" >$ '.$totalLiquidacion.'</div>';
        $tabla[] = $filaLiquidacion;

        $importe = $this->buscarTotalExpensa($idPropiedad, $idLiquidacion);
        $totalExpensa = array();
        $totalExpensa[] = '<div class="color-expensa text-white" ></div>';
        $totalExpensa[] = '<div class="color-expensa text-white text-center p-2">Total Expensa</div>';
        $totalExpensa[] = '<div class="color-expensa text-white text-center p-2" >$ '.$importe.'</div>';
        $tabla[] = $totalExpensa;

        $data = array(
            "draw" => intval($_POST["draw"]),
            "data" => $tabla
        );

        echo json_encode($data);
    }

    function buscarTotalExpensa($idPropiedad, $idLiquidacion){
        $sql = "SELECT * FROM expensa WHERE idPropiedad = '$idPropiedad' AND idLiquidacion = $idLiquidacion";
        $resultado=  $this->db->ejecutar($sql);
        $fila = $this->db->traerFila($resultado);
        $total = $this->db->traerCampo($fila, 'importe');
        return $total;
    }

    function pagar($idExpensa){
        $sql = "SELECT * FROM expensa WHERE id = $idExpensa";
        $resultado = $this->db->ejecutar($sql);
        $fila = $this->db->traerFila($resultado);
        $importe = $this->db->traerCampo($fila, 'importe');
        $idPropiedad = $this->db->traerCampo($fila,'idPropiedad');
        $fecha = date("Y-m-d");

        $this->pago->guardarPago($importe, $fecha, $idPropiedad, $idExpensa);
        $this->actualizarEstadoExpensa($idExpensa);

    }

    function actualizarEstadoExpensa($idExpensa){
        $sql = "UPDATE expensa SET estado = 1 WHERE id = $idExpensa";
        $this->db->ejecutar($sql);
    }
}   

 ?>