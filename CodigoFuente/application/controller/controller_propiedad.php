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
        $propiedades = $_POST['propiedad'];

        $data = $this->model->crear($propiedades['piso'], $propiedades['depto'],$propiedades['porcentajeParticipacion'],
                $propiedades['idConsorcio']);
        echo '
                    <tr class="gradeA" role="row">
                        <td hidden value="'.$data['id'].'"></td>
                        <td class="sorting_1">'.$data['piso'].'</td>
                        <td>'.$data['depto'].'</td>
                        <td>'.$data['porcentajeParticipacion'].'</td>
                    </tr>';
    }
    function insertar(){
        $idPropietario = Utilidades::getPost('idPropietario');
        $idPropiedad = Utilidades::getPost('idPropiedad');
        $this->model->insertarPropietario($idPropietario,$idPropiedad);

        header("Location: /");
        exit();

   }

    function listar(){
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $this->model->listarPropiedades($idConsorcio);

    }

    function eliminar(){
        $idPropiedad = $_POST['id'];
        $this->model->eliminarPropiedad($idPropiedad);
        echo("Propiedad eliminada");
    }


}