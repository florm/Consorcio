<?php

class Model_Consorcio extends Model
{
    function __construct()
    {
       parent::__construct();
    }

    function crear($nombre,$cuit,$idProvincia, $idCiudad, $pais, $dirCalle,$dirNumero,$codPost,$telefono,$email, $idOperador, $lat, $lng){
        $sql = "INSERT INTO consorcio(nombre, cuit, idProvincia, idCiudad, pais, dirCalle, dirNumero, codPost, telefono, email,
                idOperador, lat, lng)
                VALUES ('$nombre','$cuit','$idProvincia', '$idCiudad', '$pais', '$dirCalle','$dirNumero','$codPost','$telefono'
                ,'$email', '$idOperador', '$lat', '$lng')";
                
        $this->db->ejecutar($sql);
        $idConsorcio = $this->db->ultimoId();
        return $idConsorcio;
    }

    function listarConsorcio(){
        $sql = "SELECT * FROM consorcio ORDER BY nombre ASC ";

         $data=  $this->db->ejecutar($sql);

        return $data;
    }
    function listarConsorciosSinOperador(){
        $sql = "SELECT * FROM consorcio WHERE idOperador = 0 ORDER BY nombre ASC ";

        $data=  $this->db->ejecutar($sql);

        return $data;
    }

    function getConsorcio(){
        $sql = "SELECT * FROM Consorcio";
        $resultado = $this->db->ejecutar($sql);

        $fila = mysqli_fetch_all($resultado);
        return $fila;
    }

    function asignarOperador($consorcios, $idUsuario){
        foreach($consorcios as $idConsorcio){
            $sql = "UPDATE consorcio SET idOperador = $idUsuario WHERE id = $idConsorcio";
            $this->db->ejecutar($sql);

        }

        $sql = "UPDATE usuario SET idRol = 3 WHERE id = $idUsuario";
        $sql2 = "UPDATE usuario SET estado = 1 WHERE id = $idUsuario";
        $this->db->ejecutar($sql);
        $this->db->ejecutar($sql2);

    }

    function traerInformacionConsorcio($idConsorcio){
        $sql = "SELECT * FROM consorcio c JOIN propiedad p ON c.id = p.idConsorcio WHERE c.id='$idConsorcio'";
        $resultado = $this->db->ejecutar($sql);

        $data = array();
        $data['cantidadPropiedades'] = mysqli_num_rows($resultado);

        $sql2 = "SELECT * FROM expensa e JOIN propiedad p ON e.idPropiedad = p.id JOIN consorcio c ON p.idConsorcio = c.id WHERE c.id = '$idConsorcio'";
        $resultado2 = $this->db->ejecutar($sql2);

        $result = 0;
        while ($expensa = mysqli_fetch_assoc($resultado2)) {
            if ($expensa['estado'] == 1) {
                     $result++;
            }        
        }
        $data['expensasTotales'] = mysqli_num_rows($resultado2);
        $data['expensasImpagas'] = mysqli_num_rows($resultado2)- $result;
        $data['expensasPagadas'] = $result;

        $sql3 = "SELECT * FROM reclamo r JOIN propiedad p ON r.idPropiedad = p.id JOIN consorcio c ON p.idConsorcio = c.id WHERE c.id = '$idConsorcio'";
        $resultado3 = $this->db->ejecutar($sql3);


        $result2 = 0;
        while ($reclamo = mysqli_fetch_assoc($resultado3)) {
            if ($reclamo['estado'] == 'Aceptado') {
                     $result2++;
            }        
        }

        $data['reclamosTotales'] = mysqli_num_rows($resultado3);
        $data['reclamosNoAceptados'] = mysqli_num_rows($resultado3)- $result2;
        $data['reclamosAceptados'] = $result2;

        return $data;
    }
}