<?php


class Controller_Usuario extends Controller{

    function __constructor(){

    }

    function login(){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $this->model->validarUsuario($username, $password);
        if(empty($this->sesion->get('email'))){
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
        session_start();
        session_destroy();
        //redirecciona al controlador main funcion index para que me muestre el login
        header("Location: /");
    }


}
?>