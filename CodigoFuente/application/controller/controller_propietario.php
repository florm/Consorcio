<?php
include_once ('./application/model/model_tipoDocumento.php');
include_once ('./application/model/model_sexo.php');
class Controller_Propietario extends Controller
{
    function __construct(){
        parent::__construct();
    }

    function index(){

       $tiposDocumento = new model_tipoDocumento();
       $sexo = new model_sexo();
       $data = ["tiposDocumento" => $tiposDocumento->getTiposDocumento(), "sexo"=> $sexo->getSexo()];
       $this->view->generate("propietario_view.php", "template_view.php", $data );
    }


    function crearPropietario(){
        $nombre = Utilidades::getPost('nombre');
        $apellido = Utilidades::getPost('apellido');
        $dni = Utilidades::getPost('dni');
        $cuil = Utilidades::getPost('cuil');
        $email = Utilidades::getPost('email');
        $tel = Utilidades::getPost('tel');
        $consejo = Utilidades::getPost('consejo');

        $idUsuario = $this->sesion->get('idUsuario');

        $idSexo = Utilidades::getPost('idSexo');
        $idTipoDocumento = Utilidades::getPost('idTipoDocumento');

        $this->model->crear($nombre, $apellido,$dni,$cuil,$email,$tel,$consejo, $idUsuario, $idSexo, $idTipoDocumento );
        $this->view->generate("main_view.php", "template_view.php");

    }
}