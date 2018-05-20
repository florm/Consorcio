<?php

class Controller_Main extends Controller{
    function index(){
        if(!isset($_SESSION['login']))
        $this->view->generate("login_view.php", "template_log_view.php");

        else{
            $this->view->generate("main_view.php", "template_view.php");
        }

    }
}