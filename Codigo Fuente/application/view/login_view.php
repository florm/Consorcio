<form class="contenedor-formulario" novalidate>
    <img class="img-cprop" src="/imagenes/logoApp.png" alt="ControlProp" />
    <p class="header-formulario">Bienvenido</p>
    <p class="subheader-formulario">Ingrese a nuestro sistema de Administración de Consorcios</p>
    <div class="form-group input-size">
        <input type="text" class="form-control" id="usuario" placeholder="Usuario" required>
    </div>
    <div class="form-group input-size">
        <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
    </div>
    <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
    </div>
    <div id="divLoginErroneo" class="alert alert-danger-custom" role="alert" hidden="hidden">
        Revise su Usuario y Contraseña e intente ingresar nuevamente
    </div>

    <button type="button" id="ingresar" class="btn btn-ingresar">INGRESAR</button>
    <div class="text-center">
        <span>Aún no está registrado?</span>
        <a href="registro/registrar">Registrarse</a>
    </div>
</form>   
