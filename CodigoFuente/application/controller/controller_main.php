<?php

class Controller_Main extends Controller{
    function index(){
        session_start();
        if(!isset($_SESSION['login'])){
            echo("entro al if de no hay session login");
            $this->view->generate("login_view.php", "template_log_view.php");
        }

        else{
            echo("entro al else");
            $this->view->generate("main_view.php", "template_view.php");
        }

    }
}