<?php

class Controller_Main extends Controller{
    function index(){

        if(!isset($_SESSION['login'])){
            $data = "Login";
            $this->view->generate("login_view.php", "template_log_view.php", $data);
        }

        else{

           $this->view->generate("main_view.php", "template_view.php");
        }

    }

    function cambiarConsorcio(){
        $id = $_POST['idConsorcio'];
        $nombreConsorcio = $_POST['nombreConsorcio'];
        $this->model->cambiarConsorcio($id, $nombreConsorcio);
        $this->model->getNombreConsorcio($id);
    }
}