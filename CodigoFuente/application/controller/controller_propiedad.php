<?php
class Controller_Propiedad extends Controller
{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->generate("propiedad_view.php", "template_view.php");
    }

    function alta(){
        $piso = Utilidades::getPost('piso');
        $depto = Utilidades::getPost('depto');
        $porcentajeParticipacion = Utilidades::getPost('porcentajeParticipacion');
        $idConsorcio= Utilidades::getPost('idConsorcio');
        $this->model->crear($piso,$depto,$porcentajeParticipacion,$idConsorcio);
        $this->view->generate("propiedad_view.php", "template_view.php");
    }

    function insertar(){
        $idPropietario = Utilidades::getPost('idPropietario');
        $idPropiedad = Utilidades::getPost('idPropiedad');
        $this->model->insertarPropietario($idPropietario,$idPropiedad);

        header("Location: /");
        exit();

        

   }
}