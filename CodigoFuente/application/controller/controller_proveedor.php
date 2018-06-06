<?php
class Controller_Proveedor extends Controller
{

    function __construct(){
        parent::__construct();
        $this->validarSesion();
    }

    function index(){
       $this->view->generate("proveedor_view.php", "template_view.php");
    }
    
    function lista(){
    	$data = $this->model->listarProveedor();
    	$this->view->generate("listaProveedor_view.php", "template_view.php", $data);
    }

    function alta(){
        $nombre = Utilidades::getPost('nombre');
        $cuit = Utilidades::getPost('cuit');
        $telefono = Utilidades::getPost('telefono');

        $this->model->crear($nombre,$cuit,$telefono);
        header("Location: /proveedor/lista");
        exit();
   }
}

?>