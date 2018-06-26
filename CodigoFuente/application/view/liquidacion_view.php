<form method="post" action="alta" class="contenedor-formulario">
    <p class="subheader-formulario">Generar Liquidación</p>
    <div class="form-group input-size">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="consorcio" name="consorcio" placeholder="<?php echo $data; ?>" readonly>
                </div>

                <div class="form-group col-md-6">
                    <p>
                        <input id="NoIconDemo" type="text" class="form-control" name="periodo" placeholder="Seleccione mes de liquidacion.." />
                    </p>
                </div>

                <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date("Y-m-d"); ?>" hidden>

            </div>
    </div> 
    <div class="form-group input-size text-center">
        <input type="submit" id="btnLiquidar" value="LIQUIDAR" class="btn btn-guardar"></button>
    </div>
</form>
