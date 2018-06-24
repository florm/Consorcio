<form method="post" action="altaPersonal" class="contenedor-formulario">
    <p class="subheader-formulario">Registrar Operador</p>
    <div class="form-group input-size">
        <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required>
    </div>
    <div id="checarSiExiste"></div>
    <div class="form-group input-size">
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
    </div>
    <div id="checarSiSonIguales"></div>
    <div class="form-group input-size">
        <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Repetir Contraseña" required>
    </div>
    <div class="form-group input-size text-center">
    <input type="submit" id="registrarse" value="REGISTRAR" class="btn btn-guardar"></button>
    </div>
</form>