<?php
class Controller_Consorcio extends Controller
{

    function __construct(){
        parent::__construct();
    }
    function index(){
       $this->view->generate("consorcio_view.php", "template_view.php");
    }

    function lista(){
        $data = $this->model->listarConsorcio();
        $this->view->generate("listaConsorcio_view.php", "template_view.php", $data);
    }
    
    function alta(){
        $nombre = Utilidades::getPost('nombre');
        $cuit = Utilidades::getPost('cuit');
        $dirCalle = Utilidades::getPost('dirCalle');
        $dirNumero = Utilidades::getPost('dirNumero');
        $codPost = Utilidades::getPost('codPost');
        $telefono = Utilidades::getPost('telefono');
        $email = Utilidades::getPost('email');

        $idConsorcio = $this->model->crear($nombre,$cuit,$dirCalle,$dirNumero,$codPost,$telefono,$email);
        $this->sesion->add('idConsorcio', $idConsorcio);
        header("Location: /propiedad/index");
        exit();
   }
}