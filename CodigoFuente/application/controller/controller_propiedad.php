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

    function altaSimple(){
        $piso = $_POST['piso'];
        $depto = $_POST['depto'];
        $porcentajeParticipacion = $_POST['porcentajeParticipacion'];
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $this->model->crear($piso, $depto, $porcentajeParticipacion, $idConsorcio);
        echo("Propiedad creada correctamente");

    }
    function insertar(){
        $idPropietario = Utilidades::getPost('idPropietario');
        $idPropiedad = Utilidades::getPost('idPropiedad');
        $this->model->insertarPropietario($idPropietario,$idPropiedad);

        header("Location: /");
        exit();

   }

    function listar(){
        //TODO verificar inicio idConsrocio session sino mostrar mensaje
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $this->model->listarPropiedades($idConsorcio);

    }

    function eliminar(){
        $idPropiedad = $_POST['id'];
        $this->model->eliminarPropiedad($idPropiedad);
        echo("Propiedad eliminada");
    }


}