<?php
class Controller_Consorcio extends Controller
{

    function __construct(){
        parent::__construct();
        $this->validarSesion();
    }
    function index(){
        $data['operadores'] = Utilidades::getOperadores();
        $data['provincias'] = Utilidades::getProvincias();
        //var_dump($data);
       $this->view->generate("consorcio_view.php", "template_view.php",$data);
    }

    function mapa(){
        $this->view->generate("mapa_view.php", "template_view.php");
    }

    function lista(){
        $data = $this->model->listarConsorcio();
        $this->view->generate("listaConsorcio_view.php", "template_view.php", $data);
    }
    
    function alta(){
        $nombre = Utilidades::getPost('nombre');
        $cuit = Utilidades::getPost('cuit');
        $pais = 'Argentina';
        $idProvincia = Utilidades::getPost('idProvincia');
        $idCiudad = Utilidades::getPost('idCiudad');
        $dirCalle = Utilidades::getPost('dirCalle');
        $dirNumero = Utilidades::getPost('dirNumero');
        $codPost = Utilidades::getPost('codPost');
        $telefono = Utilidades::getPost('telefono');
        $email = Utilidades::getPost('email');
        $idOperador = Utilidades::getPost('idOperador');

        $coordenadas = Utilidades::getCoordenadas($dirCalle, $dirNumero, $codPost, $idProvincia,$idCiudad, $pais);

        $lat = $coordenadas['lat'];
        $lng = $coordenadas ['lng'];

        $idConsorcio = $this->model->crear($nombre,$cuit,$idProvincia,$idCiudad,$pais,$dirCalle,$dirNumero,$codPost,$telefono,$email,$idOperador, $lat, $lng);
        $this->sesion->add('idConsorcio', $idConsorcio);
        header("Location: /propiedad/index");
        exit();
   }

   function propiedades(){

       $data = $this->model->getConsorcio();
       $this->view->generate("listaPropiedades_view.php", "template_view.php", $data);
   }

   function asignarOperador(){
       $consorcios = Utilidades::getPost('consorcios');
       $idUsuario = Utilidades::getPost('idUsuario');
       $this->model->asignarOperador($consorcios,$idUsuario);
       $this->view->generate("main_view.php", "template_view.php");
   }

   function estadisticas(){
        $idConsorcio = $_SESSION['idConsorcioEnUso'];
        $data= $this->model->traerInformacionConsorcio($idConsorcio);
        $this->view->generate("estadistica_view.php", "template_view.php",$data);
    }
}

?>