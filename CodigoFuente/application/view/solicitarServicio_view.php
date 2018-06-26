<div class="m-4">
    <div id="alert_message"></div>
    <table id="tablaReclamos" class="table table-bordered">
        <thead>
            <tr>
                <th>Propiedad</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

    </table>
</div>
<br>
<div class="actualizar-reporte" hidden>
    <form method="post" action="solicitarServicio" class="contenedor-formulario">
    <p class="subheader-formulario">Solicitar Servicio</p>
    <div class="form-group input-size">
        <div class="form-row">
            
            <div class="form-group col-md-6">
                <?php
                echo " <select id='proveedor' name='idProveedor' class='form-control'>";
                echo "<option value='0'>Proveedor..</option>";
                $proveedor = $data["proveedor"];
                for ($row = 0; $row < count($proveedor); $row++) {
                    echo "<option value='".$proveedor[$row][0]."' >".strtoupper($proveedor[$row][1])."</option>"."<br>";
                }
                echo "</select>";
                ?>
            </div>

            <div class="form-group col-md-6">
                <input type="number" class="form-control" id="importe" name="importe" placeholder="Importe $$">
            </div>

            <div class="form-group col-md-12">
                <textarea class="form-control" id="concepto" name="concepto" placeholder="Detalle el pedido.." rows="5"></textarea>
            </div>

            <input type="text" class="form-control" id="idRec" name="idReclamo" hidden>

            <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date("Y-m-d"); ?>" hidden>
        </div>
    </div>
    <div class="form-group input-size text-center">
        <input type="submit" id="btnSolicitarServicio" value="ENVIAR" class="btn btn-guardar"></button>
    </div>
</form>
</div>
<script type="text/javascript" src="../js/listadoReclamos.js"></script>