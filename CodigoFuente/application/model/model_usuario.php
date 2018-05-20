<?php
include_once ('./helpers/conexion.php');

class Model_Usuario extends Model{
    private $id;
    private $username;
    private $password;
    private $idRol;



    function login ($username, $password){
	    $password = md5($password);

       $sql = "SELECT * FROM usuario WHERE" . " " . "username = '$username'" . " " . "AND password = '$password'";

        $resultado = $this->conn->consulta($sql);

        $datosUsuario = $this->conn->traerFila($resultado);


        if ($this->conn->cantidadFilas($resultado) > 0){
          session_start();
          $_SESSION['login'] = $username;
            return strtoupper($username);
        }

        $this->conn->cerrarConexion( $this->conn);


    }
    function checkStatus (){
        if(isset($_SESSION['logueado'])){
            return true;
        }
        else{
            return false;
        }

    }

    function logout(){
        session_destroy();
    }




}