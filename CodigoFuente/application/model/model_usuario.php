<?php
include_once ('./helpers/conexion.php');

class Model_Usuario extends Model{
    private $id;
    private $username;
    private $password;
    private $idRol;



    function validarUsuario ($username, $password){
	    $password = md5($password);

       $sql = "SELECT * FROM usuario WHERE" . " " . "username = '$username'" . " " . "AND password = '$password'";

        $resultado = $this->conn->consulta($sql);

        $datosUsuario = $this->conn->traerFila($resultado);


        if ($this->conn->cantidadFilas($resultado) > 0){

          $this->sesion->add('login', $username);
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


}