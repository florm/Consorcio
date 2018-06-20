<?php
$idPropietario = $_SESSION['idPropietario']; 
?>

<form method="post" action="../propiedad/insertar" class="contenedor-formulario">
    <p class="subheader-formulario">Agregar Propiedad</p>
    <div class="form-group input-size">
            <div class="form-row">
                <label>Seleccionar Consorcio</label>
                <div class="form-group col-md-12">
                    <?php
                    echo " <select id='consorcio' name='idConsorcio' class='form-control'>";
                    echo "<option value='0'>Consorcio..</option>";
                    $consorcio = $data["consorcio"];
                    for ($row = 0; $row < count($consorcio); $row++) {
                        echo "<option value='".$consorcio[$row][0]."' >".strtoupper($consorcio[$row][1])."</option>"."<br>";
                    }
                    echo "</select>";
                    ?>
                </div>

                <label>Seleccionar Departamento</label>
                <div id="resultado" name="idPropiedad"  class="form-group col-md-12" ></div>
        	</div>

            <input type="text" class="form-control" id="idPropietario"
                   name="idPropietario" value='<?php echo($idPropietario) ?>' hidden> 

    <div class="form-group input-size text-center">
        <input type="submit" id="btnGuardarDepto" value="GUARDAR" class="btn btn-guardar"></button>
    </div>
</form>