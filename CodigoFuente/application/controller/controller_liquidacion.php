<?php
class Controller_Liquidacion extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->validarSesion();
    }

    function index()
    {
        $this->view->generate("liquidacion_view.php", "template_view.php");
    }

    //function lista(){
    //    $data = $this->model->listarconsorcio();
    //    $this->view->generate("listaconsorcio_view.php", "template_view.php", $data);
    //}
    //
    function alta()
    {
        
    }
    //function propiedades(){

    //   $data = $this->model->getConsorcio();
    //   $this->view->generate("listaPropiedades_view.php", "template_view.php", $data);
    //


    //}
}

?>