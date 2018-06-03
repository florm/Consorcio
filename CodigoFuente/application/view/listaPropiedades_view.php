<div class="contenedor-formulario">
    <p class="subheader-formulario">Seleccione consorcio</p>
    <div class="form-group input-size">
        <div class="form-row">
            <div class="form-group col-auto">
                <?php

                echo " <select id='consorcio' name='consorcio' class='form-control'>";
                echo "<option value='0' >Seleccione consorcio</option>";

                for ($row = 0; $row < count($data); $row++) {
                    echo "<option value='".$data[$row][0]."'>".strtoupper($data[$row][1])."</option>"."<br>";
                }
                echo "</select>";
                ?>
            </div>
            <div class="form-group col-md-4">
                <a type="button" class="btn btn-success" id="btnAgregarPropiedad" name="nombre">Agregar Propiedad</a>
            </div>
        </div>
    </div>
    <div id="contenedorPropiedad">
        <div class="form-group input-size modeloPropiedad" id="formPropiedad"  hidden>
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
                   name="idConsorcio" value='' hidden>
        </div>


    </div>
    <div class="form-group col-md-4">
        <button type="button" class="btn btn-success" id="btnGuardarPropiedad" name="nombre">Guardar Propiedad</button>
    </div>
    <div id="resultado">

    </div>

</div>
<script type="text/javascript" src="../js/listadoPropiedades.js"></script>