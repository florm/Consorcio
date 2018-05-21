<?php
include_once ('./helpers/conexion.php');
include_once ('/model/model_rol.php');

class Model_Usuario extends Model{
    private $id;
    private $username;
    private $password;
    private $idRol;
    private $rol;

    function __construct()
    {
        parent::__construct();
        $this->rol = new Model_Rol();
    }

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

    function crearUsuario($username, $password){
        $password = md5($password);
        $this->rol->buscarRol("propietario");
        $sql = "INSERT INTO usuario (username, password, idRol) VALUES ($username, $password, $this->rol->id)";

        $resultado = $this->conn->consulta($sql);
        if ($this->conn->cantidadFilas($resultado) > 0){

            $this->sesion->add('login', $username);
            $this->sesion->add('rol', $this->rol);

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