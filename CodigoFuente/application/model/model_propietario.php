<?php

class Model_Propietario extends Model
{
    function __construct()
    {
       parent::__construct();
    }

    function crear($nombre, $apellido, $dni, $cuil, $email, $tel, $consejo, $idUsuario, $idSexo, $idTipoDocumento){
        $sql = "INSERT INTO propietario(nombre, apellido, dni, cuil, email, telefono, consejo
                , idUsuario, idSexo, idTipoDocumento)
                VALUES ('$nombre', '$apellido', '$dni', '$cuil', '$email', '$tel', $consejo, $idUsuario, $idSexo, $idTipoDocumento)";

        $this->db->ejecutar($sql);
        $idPropietario = $this->db->ultimoId();
        return $idPropietario;
        //$this->db->cerrarConexion( $this->db);

    }

}