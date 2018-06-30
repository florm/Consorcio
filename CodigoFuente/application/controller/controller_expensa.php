<?php 

class Controller_Expensa extends Controller
{
	
	function __construct()
    {
        parent::__construct();
        $this->validarSesion();
    }

    function lista(){
    	$idPropietario = $_SESSION['idPropietario'];
    	$data = $this->model->listarPropiedadesPropietario($idPropietario);
        //var_dump($lista = mysqli_fetch_array($data));
        $this->view->generate("expensas_view.php", "template_view.php", $data);
    }

    function listarExpensas(){
    	$idPropiedad = $_POST['id'];
        $this->model->listar($idPropiedad);
    }

    function detalle(){
        $idLiquidacion =  $_POST['idLiquidacion'];
        $idPropiedad =  $_POST['idPropiedad'];
        $this->model->verDetalleExpensa($idPropiedad, $idLiquidacion);

    }

}

 ?>