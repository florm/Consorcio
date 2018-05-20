<?php


class Controller_Usuario extends Controller{

    function __constructor(){

    }

    function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->model->validarUsuario($username, $password);
        if(isset($_SESSION['login'])){
            $this->view->generate('main_view.php', 'template_view.php');
        }
        else{
            echo("error");
        }

    }


}
?>