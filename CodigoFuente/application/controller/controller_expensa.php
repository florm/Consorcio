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
        $this->view->generate("expensas_view.php", "template_view.php", $data);
    }

    function listarExpensas(){
    	$idPropiedad = $_POST['id'];
    	$this->model->listar($idPropiedad);
    }
}

 ?>