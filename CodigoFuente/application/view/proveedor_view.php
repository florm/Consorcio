 <form method="post" action="alta" class="contenedor-formulario">
    <p class="subheader-formulario">Crear Proveedor</p>
    <div class="form-group input-size">
        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-12">
                <input type="number" class="form-control" id="cuit" name="cuit" placeholder="CUIT" required>
            </div>
            <div class="form-group col-md-12">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
            </div>
        </div>
    </div>
    <div class="form-group input-size text-center">
        <input type="submit" id="btnGuardarProv" value="GUARDAR" class="btn btn-guardar"></button>
    </div>
</form>