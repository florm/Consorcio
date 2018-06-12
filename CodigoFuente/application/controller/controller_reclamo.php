<?php 
include_once ('./application/model/model_propiedad.php');
include_once ('./application/model/model_proveedor.php');
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
        $proveedor = new model_proveedor();
        $data = ["proveedor"=> $proveedor->getProveedor()];
        $this->view->generate("solicitarServicio_view.php", "template_view.php", $data);
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

    function solicitarServicio(){
        $fecha = Utilidades::getPost('fecha');
        $concepto = Utilidades::getPost('concepto');
        $importe = Utilidades::getPost('importe');
        $idReclamo = Utilidades::getPost('idReclamo');
        $idProveedor = Utilidades::getPost('idProveedor');

        $this->model->registrarGasto($fecha, $concepto, $importe, $idReclamo, $idProveedor);
        header("Location: /");
        exit();
    }

}

 ?>