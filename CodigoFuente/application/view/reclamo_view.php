<form method="post" action="enviarReclamo" class="contenedor-formulario">
    <p class="subheader-formulario">Enviar Reclamo</p>
    <div class="form-group input-size">
        <div class="form-row">
            <!-- VER EL SELECT, AGREGARLE CONSORCIO PORQUE ES CONFUSO CUANDO HAY MAS DE UNA PROPIEDAD -->
            <div class="form-group col-md-12">
                <?php
                echo " <select id='idPropiedad' name= 'idPropiedad' class='form-control'>";
                echo "<option value='0'>Departamento..</option>";
                $propiedad = $data["propiedad"];
                for ($row = 0; $row < count($propiedad); $row++) {
                    echo "<option value='".$propiedad[$row][0]."' >" . " Piso " . $propiedad[$row][1] . " Depto " . $propiedad[$row][2] . " - Consorcio " . $propiedad[$row][10] . "</option>"."<br>";
                }
                echo "</select>";
                ?>
            </div>

            <div class="form-group col-md-12">
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Detalle de reclamo.." rows="5"></textarea>
            </div>

            <input type="text" class="form-control" id="estado"
                       name="estado" value="Pendiente" hidden>

            <input type="date" class="form-control" id="fecha"
                       name="fecha" value="<?php echo date("Y-m-d"); ?>" hidden>

        </div>
    </div>
    <div class="form-group input-size text-center">
        <input type="submit" id="btnEnviarReclamo" value="ENVIAR" class="btn btn-guardar"></button>
    </div>
</form>