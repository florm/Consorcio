<?php 
include_once ('./application/model/model_propiedad.php');
class Controller_Reclamo extends Controller
{
	
	function __construct(){
        parent::__construct();
        $this->validarSesion();
    }

    function index(){
    	$idPropietario = $_SESSION['idPropietario'];
    	//$data =  $this->model->traerPropiedades($idPropietario);

    	$propiedad = new model_propiedad();
        $data = ["propiedad" => $propiedad->traerPropiedades($idPropietario)];
        //var_dump($data);

        //$idPropiedad = $this->model->traerPropiedades($idPropietario);
        //$this->sesion->add('idPropiedad', $idPropiedad);

    	//$data = $this->model->getConsorcios();
        $this->view->generate("reclamo_view.php", "template_view.php", $data);
    }

    function enviarReclamo(){
        $idPropiedad = Utilidades::getPost('idPropiedad');
        $descripcion = Utilidades::getPost('descripcion');
        $estado = Utilidades::getPost('estado');
        $fecha = Utilidades::getPost('fecha');
        
        $this->model->cargarReclamo($idPropiedad, $descripcion, $fecha, $estado);
        header("Location: /");
        exit();
    }

    function solicitar(){
        $this->view->generate("solicitarServicio_view.php", "template_view.php");
    }

    function listar(){
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $this->model->listarReclamos($idConsorcio);
    }

    function rechazar(){
        $idReclamo = $_POST['id'];
        $this->model->rechazarReclamo($idReclamo);
    }

    function aceptar(){
        $idReclamo = $_POST['id'];
        $this->model->aceptarReclamo($idReclamo);
    }

}

 ?>