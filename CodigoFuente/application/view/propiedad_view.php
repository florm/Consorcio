<?php
$idConsorcio = $_SESSION['idConsorcio'];
?>
    <!--<div class="form-group input-size text-center">
        <input type="submit" id="btnAgregarPropiedad" value="AGREGAR PROPIEDAD" class="btn btn-info">
    </div>-->
    <form method="post" action="alta" class="contenedor-formulario" id="contenedorPropiedad">
        <p class="subheader-formulario">Ingresar datos de propiedades</p>
        <div class="form-group input-size" id="modeloPropiedad">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="number" class="form-control" id="piso" name="piso" placeholder="Piso">
                </div>
                <div class="form-group col-md-4">
                    <input type="depto" class="form-control" id="depto" name="depto" placeholder="Departamento" required>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="porcentajeParticipacion" name="porcentajeParticipacion" placeholder="Porcentaje de Participacion">
                </div>
            </div>
            <input type="text" class="form-control" id="idConsorcio"
                   name="idConsorcio" value='<?php echo($idConsorcio) ?>' hidden>

            <div class="form-group input-size text-center">
                <input type="submit" id="btnGuardarPropiedad" value="GUARDAR" class="btn btn-guardar">
            </div>

        </div>
    </form>


