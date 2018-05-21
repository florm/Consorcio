<?php

class Conexion {

    private $conn;
    private $resultado;

    function __construct ($host, $usuario, $pass, $nombreDb){

        $this->conn= mysqli_connect($host, $usuario, $pass, $nombreDb);

    }

    function cerrarConexion(){
        mysqli_close($this->conn);
    }

    function consulta($query){
        $this->resultado = mysqli_query($this->conn,$query);
        return $this->resultado;
    }

    function traerFila($resultado){
        return mysqli_fetch_assoc($resultado);
    }

    function cantidadFilas ($resultado){
        return mysqli_num_rows($resultado);
    }


    
}
//
?>