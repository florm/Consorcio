<?php 

class Model_Expensa extends Model
{
	
	function __construct()
    {
       parent::__construct();
    }

    function listarPropiedadesPropietario($idPropietario){
    	$sql = "SELECT * FROM propiedad WHERE idPropietario = '$idPropietario'";
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

            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="importe">'.$fila["importe"].'</div>';
            //$subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="descripcion">'.$fila["descripcion"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="fechaVencimiento">'.$fila["fechaVencimiento"].'</div>';
            $subarray[] = '<div class="d-flex flex-row justify-content-around"><button type="button" name="verdetalles" class="btn btn-info btn-xs verdetalles" id="'.$fila['id'].'">Ver Detalle</button><button type="button" name="pagar" class="btn btn-success btn-xs pagar" id="'.$fila['id'].'">Pagar</button></div>';

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