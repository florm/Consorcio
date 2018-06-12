<?php


class Controller_Usuario extends Controller{

    function __construct(){
        parent::__construct();
        $this->validarSesion();
    }
    
    function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->model->validarUsuario($username, $password);
        if(empty($this->sesion->get('login'))){
           //redirijo al controlador main funcion index para que entre al else y vaya al main
            header("Location: /");
            exit();

        }
        else{
            //si no se pudo iniciar la sesion redirijo al controlador main funcion index para que
            // entre al if y vaya nuevamente al login
            header("Location: /");
            exit();
        }

    }

    function logout(){
        session_destroy();
        //redirecciona al controlador main funcion index para que me muestre el login
        header("Location: /");
    }

    function registrar(){
        $this->view->generate('registro_view.php', 'template_log_view.php');
    }

    function crearUsuario(){

        $username = Utilidades::getPost('username');
        $password = Utilidades::getPost('password');
        $nombre = Utilidades::getPost('nombre');
        $apellido= Utilidades::getPost('apellido');

        $this->model->crearUsuario($username, $password, $nombre, $apellido);

        if($this->sesion->get('login')== $username){
            //redirijo al controlador main funcion index para que entre al else y vaya al main
            header("Location: /");
            exit();

        }
        else {
          echo("entro a else, no creo login");
        }

    }


}
?>