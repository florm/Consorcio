<?php

include_once ('./application/model/model_rol.php');

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

        $usuario = "SELECT * FROM usuario WHERE" . " " . "username = '$username'" . " " . "AND password = '$password'";

        $resultadoUsuario = $this->db->ejecutar($usuario);

        if ($this->db->cantidadFilas($resultadoUsuario) > 0 ){
            $filaUsuario = $this->db->traerFila($resultadoUsuario);

            if ($this->db->traerCampo($filaUsuario, 'estado') == 1){
                $idUsuario = $this->db->traerCampo($filaUsuario, 'id');
                $idRol = $this->db->traerCampo($filaUsuario, 'idRol');
                $this->sesion->add('login', $username);
                $this->sesion->add('idRol', $idRol);
                $this->sesion->add('idUsuario', $idUsuario);

                //busco nombre y apellido del usuario para cargarlo en la sesion
                $propietario ="SELECT * FROM propietario WHERE" . " " . "idUsuario = '$idUsuario'";

                $resultadoPropietario = $this->db->ejecutar($propietario);
                if($this->db->cantidadFilas($resultadoPropietario) == 0){
                    $this->sesion->add('nombre', 'admin');
                    $this->sesion->add('apellido', 'admin');
                }
                else{
                    $filaPropietario = $this->db->traerFila($resultadoPropietario);

                    $this->sesion->add('nombre', $this->db->traerCampo($filaPropietario,'nombre'));
                    $this->sesion->add('apellido', $this->db->traerCampo($filaPropietario, 'apellido'));
                    $this->sesion->add('idPropietario', $this->db->traerCampo($filaPropietario, 'id'));
                }
            }
        }


        $this->db->cerrarConexion( $this->db);


    }



    function crearUsuario($username, $password, $nombre, $apellido){
        $password = md5($password);
        $idRol = $this->rol->buscarRol("propietario");
        $sql = "INSERT INTO usuario (username, password, idRol) VALUES ('$username', '$password', $idRol)";

        $this->db->ejecutar($sql);

        //transformamos primera letra de nombre y apellido en mayusculas
        $nombre = ucfirst($nombre );
        $apellido = ucfirst($apellido );

        $this->sesion->add('login', $username);
        $this->sesion->add('nombre', $nombre);
        $this->sesion->add('apellido', $apellido);
        $this->sesion->add('idRol', $idRol);

        $idUsuario = $this->db->ultimoId();
        $this->sesion->add('idUsuario',$idUsuario );

        $this->db->cerrarConexion();


    }

}