<form class="contenedor-formulario" method="post" action="./usuario/login">
    <img class="img-cprop" src="/imagenes/logoApp.png" alt="ControlProp" />
    <p class="header-formulario">Bienvenido</p>
    <p class="subheader-formulario">Ingrese a nuestro sistema de Administración de Consorcios</p>
    <div class="form-group input-size">
        <input type="text" class="form-control" id="username"  name="username" placeholder="Usuario" required>
    </div>
    <div class="form-group input-size">
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
    </div>
    <div id="divLoginErroneo" class="alert alert-danger-custom" role="alert" hidden="hidden">
        Revise su Usuario y Contraseña e intente ingresar nuevamente
    </div>

    <input type="submit" id="ingresar" class="btn btn-ingresar">
    <div class="text-center">
        <span>Aún no está registrado?</span>
        <a href="usuario/registrar">Registrarse</a>
    </div>
</form>   
