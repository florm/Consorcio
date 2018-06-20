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
 
    function alta()
    {
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $periodo = Utilidades::getPost('periodo');

        //$periodo = Utilidades::getPost('periodo')."-00"; ESTO ES OPCIONAL, SI QUIERO GUARDARLO PERIODO EN FORMATO DATE
        //Concateno -00 ya que no me interesa el dia, para conservar el formato date en la base de datos. El campo periodo es algo que no se va a vizualisar en la pagina.

        $fecha = Utilidades::getPost('fecha');
        $arrayPeriodo = explode("-", $periodo); //Descompone el String cada vez que encuentra un "-" y los coloca en array.
        $this->model->liquidar($idConsorcio, $arrayPeriodo, $fecha, $periodo);
        header("Location: /liquidacion/lista");
        exit();
    }

    function lista(){
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $data = $this->model->listarLiquidaciones($idConsorcio);
        $this->view->generate("listaLiquidacion_view.php", "template_view.php", $data);
    }

    function listarDetalles(){
        $idLiquidacion = $_POST['id'];
        $this->model->verDetallesLiquidacion($idLiquidacion);
    }


    //}
}

?>