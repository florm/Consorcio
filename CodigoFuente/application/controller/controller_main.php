<?php

class Controller_Main extends Controller{
    function index(){
        $this->view->generate("login_view.php", "template_log_view.php");

        //si esta iniciada
        //$this->view->generate("main_view.php", "template_view.php");
    }
}