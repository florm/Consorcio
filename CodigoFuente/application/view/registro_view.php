<form method="post" action="crearUsuario" class="contenedor-formulario">
    <img class="img-cprop" src="/imagenes/logoApp.png" alt="ControlProp" />
    <p class="header-formulario">Registro</p>
    <p class="subheader-formulario">Complete el siguiente formulario</p>
    <!-- <div class="form-group input-size">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group input-size">
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
    </div>  COMENTO YA QUE EN EL REGISTRO NO UTILIZO NOMBRE Y APELLIDO-->
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

    <input type="submit" id="registrarse" value="REGISTRARSE" class="btn btn-ingresar"></button>
    <div class="alert alert-danger-custom" role="alert">
        Luego de registrarse, un Administrador debe darle de alta para poder ingresar al Sistema.
    </div>

</form>

