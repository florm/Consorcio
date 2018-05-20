<?php


class Controller_Usuario extends Controller{

    function __constructor(){

    }

    function home(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $this->model->login($username, $password);
        if(isset($_SESSION['login'])){
           $this->view->generate('main_view.php', 'template_view.php', $data);
        }
        else{
            echo("error");
        }

    }


}
?>