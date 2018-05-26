<?php
class Controller_Consorcio extends Controller
{

    function __construct(){
        parent::__construct();
    }
    function index(){
       $this->view->generate("consorcio_view.php", "template_view.php");
    }

    function crearConsorcio(){
        $nombre = Utilidades::getPost('nombre');
        $cuit = Utilidades::getPost('cuit');
        $dirCalle = Utilidades::getPost('dirCalle');
        $dirNumero = Utilidades::getPost('dirNumero');
        $codPost = Utilidades::getPost('codPost');
        $telefono = Utilidades::getPost('telefono');
        $email = Utilidades::getPost('email');
        $coordGoogle = Utilidades::getPost('coordGoogle');
        
        $this->model->crear($nombre,$cuit,$dirCalle,$dirNumero,$codPost,$telefono,$email,$coordGoogle);
        $this->view->generate("main_view.php", "template_view.php");
   }
}