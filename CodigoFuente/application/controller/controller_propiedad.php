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
        $idConsorcio = $_POST['idConsorcio'];
        //tengo que mandar un echo para que se agregue al div resutlado y me muestre la tabla
        $propiedades = $this->model->listarPropiedades($idConsorcio);

        echo '<table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr role="row">
                        <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 60px;" hidden>Id</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Piso</th>
                        <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 206px;">Departamento</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 189px;">Porcenje de Participacion</th>
                    </tr>
                    </thead>
                    <tbody id="bodyPropiedad">';
        while($lista = mysqli_fetch_array($propiedades)){
                echo '
                    <tr class="gradeA" role="row">
                        <td hidden value="'.$lista['id'].'"></td>
                        <td class="sorting_1">'.$lista['piso'].'</td>
                        <td>'.$lista['depto'].'</td>
                        <td>'.$lista['porcentajeParticipacion'].'</td>
                    </tr>';


        }
        echo '</tbody>
            </table>';

    }


}