<?php


class Controller_Usuario extends Controller{

    function __constructor(){

    }

    function login(){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $this->model->validarUsuario($username, $password);
        if(isset($_SESSION['login'])){
           //aca tendria que ir al controlador main funcion index para que entra al else y vaya al main
            $this->view->generate('main_view.php', 'template_view.php', $data);
        }
        else{
            echo("entro a error en controller usuario");
        }

    }

    function logout(){
        session_start();
        session_destroy();
        //aca deberia redireccionar al controlador main funcion index para que me muestre el login
        $this->view->generate("login_view.php", "template_log_view.php");
    }


}
?>