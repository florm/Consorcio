<form method="post" action="alta" class="contenedor-formulario">
    <p class="subheader-formulario">Crear consorcio</p>
    <div class="form-group input-size">
            <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" id="cuit" name="cuit" placeholder="CUIT" required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="dirCalle" name="dirCalle" placeholder="Calle">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="dirNumero" name="dirNumero" placeholder="Numero">
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" id="codPost" name="codPost" placeholder="Código Postal">
            </div>
            <div class="form-group col-md-6">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group col-md-12">
                 <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
            </div>

    </div> 
    <div class="form-group input-size text-center">
        <input type="submit" id="btnGuardarCon" value="CONTINUAR" class="btn btn-guardar"></button>
    </div>
</form>