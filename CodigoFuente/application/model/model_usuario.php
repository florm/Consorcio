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

    function listarUsuariosInactivos(){

        $sql = "SELECT * FROM usuario WHERE estado = 0";

        $resultado = $this->db->ejecutar($sql);

        $data = array();
        while($fila = mysqli_fetch_array($resultado)){
            $subarray = array();

            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="username">'.$fila["username"].'</div>';
            //$subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="descripcion">'.$fila["descripcion"].'</div>';
            $subarray[] = '<div contenteditable class="update" data-id="'.$fila["id"].'" data-column="estado">'.$fila["estado"].'</div>';
            $subarray[] = '<div class="d-flex flex-row justify-content-around"><button type="button" name="habilitarUser" class="btn btn-success btn-xs habilitarUser" id="'.$fila['id'].'">Habilitar</button><button type="button" name="eliminarUser" class="btn btn-danger btn-xs eliminarUser" id="'.$fila['id'].'">Eliminar</button></div>';

            $data[] = $subarray;
        }
        $data = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => mysqli_num_rows($resultado),
            "recordsFilter" => mysqli_num_rows($resultado),
            "data" => $data
        );

        echo json_encode($data);
    }

    function actualizarUsuario($idUsuario){
        $sql = "UPDATE usuario SET estado=1 WHERE id='$idUsuario'";
        $this->db->ejecutar($sql);
    }

}
?>