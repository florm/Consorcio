<?php
$idConsorcio = $_SESSION['idConsorcio'];
?>
<div class="form-group input-size text-center mt-5">

    </div>
        <h3 class="subheader-formulario text-center mb-4">Ingresar datos de propiedades</h3>
        <div id="contenedorPropiedad">
            <div class="form-group input-size modeloPropiedad" hidden>
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
            </div>
            <div class="form-group input-size atributos-propiedad">
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
            </div>

        </div>
        <div class="form-group text-center">
            <input type="submit" id="btnAgregarPropiedad" value="AGREGAR OTRA FILA" class="btn btn-info"><br>
            <button id="btnGuardarPropiedad" value="GUARDAR" class="btn btn-guardar">Guardar Propiedades</button>
            <button id="btnCancelar" value="CANCELAR" class="btn btn-guardar">Cancelar</button>
        </div>
        <div id="mensaje"></div>

<div class="modal" id="modalPropiedad">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4>Mensaje</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
                <p>Las propiedades se agregaron correctamente</p>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="../js/propiedadScript.js"></script>

