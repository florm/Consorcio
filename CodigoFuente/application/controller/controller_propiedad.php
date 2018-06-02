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
        $propiedades = $_POST['propiedades'];
        for($i= 0; $i < sizeof($_POST['propiedades']); $i++){
            $this->model->crear($propiedades[$i]['piso'], $propiedades[$i]['depto'],$propiedades[$i]['porcentajeParticipacion'],
                $propiedades[$i]['idConsorcio']);
        }


        //$this->view->generate("propiedad_view.php", "template_view.php");

    }


}