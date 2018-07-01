<?php

class Conexion extends mysqli {

    private $host = '127.0.0.1:3307';
    private $db = 'controlprop';
    private $userDb = 'root';
    private $passDb = '';

    function __construct() {
        parent::__construct($this->host, $this->userDb, $this->passDb, $this->db);

    }

    function cerrarConexion(){
        mysqli_close($this);
    }

    function ejecutar($query){

        $resultado = mysqli_query($this,$query);
        return $resultado;
    }

    function ejecutarConPrepare($sql, $value1, $value2){
        $stmt = mysqli_prepare($this, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $value1, $value2);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_fetch($stmt);
    }

    function traerFila($resultado){
        $resultado = mysqli_fetch_assoc($resultado);
        return $resultado;
    }

    function traerCampo($fila, $nombreCampo){
        return $fila[$nombreCampo];
    }

    function traerFilas($resultado){
        return mysqli_fetch_all($resultado);
    }

    function traerArray ($resultado){
        return mysqli_fetch_array($resultado);
    }

    function cantidadFilas ($resultado){
        return mysqli_num_rows($resultado);
    }

    function ultimoId(){
        return mysqli_insert_id($this);
    }


    
}

?>