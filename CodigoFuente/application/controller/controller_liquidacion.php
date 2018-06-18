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
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $periodo = Utilidades::getPost('periodo')."-00"; 
        //Concateno -00 ya que no me interesa el dia, para conservar el formato date en la base de datos. El campo periodo es algo que no se va a vizualisar en la pagina.
        $fecha = Utilidades::getPost('fecha');

        //var_dump($periodo);
        //var_dump($fecha);

        $this->model->prueba($idConsorcio, $periodo, $fecha);
    }
    //function propiedades(){

    //   $data = $this->model->getConsorcio();
    //   $this->view->generate("listaPropiedades_view.php", "template_view.php", $data);
    //


    //}
}

?>