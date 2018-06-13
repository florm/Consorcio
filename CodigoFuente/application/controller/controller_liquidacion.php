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
        $periodo = date_create(Utilidades::getPost('periodo'));

        $periodoDesde= date_create(Utilidades::getPost('periodo'));

        $periodoHasta = date_add($periodo, date_interval_create_from_date_string("1 month"));

        $idConsorcio = $_SESSION['idConsorcioEnUso'];

        $fecha = date("Y-m-d");

        //$idConsorcio = $this->model->crear($nombre, $cuit, $dirCalle, $dirNumero, $codPost, $telefono, $email);
        //$this->sesion->add('idConsorcio', $idConsorcio);
        //header("Location: /propiedad/index");
        //exit();

    }
    //function propiedades(){

    //   $data = $this->model->getConsorcio();
    //   $this->view->generate("listaPropiedades_view.php", "template_view.php", $data);
    //


    //}
}

?>