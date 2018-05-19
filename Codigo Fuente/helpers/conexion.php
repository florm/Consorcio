<?php

class Conexion {
    private $host;
    private $usuario;
    private $pass;
    private $nombreDb;
    private $conn;
    private $resultado;

    function __construct ($host, $usuario, $pass, $nombreDb){
        $this->conn= mysqli_connect($this->$host, $this->$usuario,$this->$pass,$this->$nombreDb);
    }

    function cerrarConexion($conexion){
        mysqli_close($conexion);
    }

    function consulta($query){
        $this->$resultado = mysqli_query($this->conn,$query);
        return $this->$resultado;
    }

    
}
?>