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
    <div class="form-group input-size">
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
    </div>
    <div id="checarSiSonIguales"></div>
    <div class="form-group input-size">
        <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Repetir Contraseña" required>
    </div>

    <input type="submit" id="registrase" value="REGISTRARSE" class="btn btn-ingresar"></button>

</form>

<!-- <script type="text/javascript" src="../js/validarRegistro.js"></script> -->


<!-- <div class="form contenedor-formulario">
    <h2>Crear una cuenta</h2>
    <form method="POST" action="complete-register.php">
      <input required="" name="name" id="name" type="text" placeholder="Nombre"/>
        <input minlength="4" maxlength="13" required="" type="text" placeholder="Usuario" name="username" id="username"/>
   <div id="checkusername" class=""></div>
   <input required="" name="password" id="password" type="password" placeholder="Contraseña"/>
   <input required placeholder="Repetir Contraseña" required="" id='rpassword' name='rpassword' type='password' >
   <div class="" id="divchearsisoniguales"></div>
   <input required="" name="email" id="email" type="email" placeholder="Email"/>
      <div id="checkemailresponse"></div>
      <input type="number"  name="telephone" type="tel" placeholder="Teléfono OPCIONAL"/>
      <button type="submit" id="thesubmitBoton">Registrarme</button>
    </form>
  </div>
  <div class="cta"><a href="#">Olvidaste tu contraseña?</a></div>
</div>

<script>
          
        $(document).ready(function () {
   $("#rpassword").keyup(checkPasswordMatch);
 
});

   $(document).ready(function () {
   $("#password").keyup(checkPasswordMatch2);
 
});

 
 

 function checkPasswordMatch2() {
 var repeatPass= document.getElementById('rpassword').value;
var repeatclave = repeatPass.length;
 if (repeatclave>0)
 {
    var password = $("#password").val();
    var confirmarPassword = $("#rpassword").val();

    if (password != confirmarPassword){
        $("#divchearsisoniguales").html("<div class='alert alert-danger'><i class='fa fa-close'></i>  Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
   document.getElementById("thesubmitBoton").disabled = true; 
} else{
    
        $("#divchearsisoniguales").html("<div class='alert alert-success'><i class='fa fa-check'></i> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
        document.getElementById("thesubmitBoton").disabled = false; 
    }
    }
}
    
    </script>
  <script>

   

 function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmarPassword = $("#rpassword").val();

    if (password != confirmarPassword){
        var contador=0;
        $("#divchearsisoniguales").html("<i class='fa fa-close'></i>  Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'>");
   document.getElementById("thesubmitBoton").disabled = true; 
} else{
    contador=1; 
        $("#divchearsisoniguales").html("<i class='fa fa-check'></i> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'>");
        document.getElementById("thesubmitBoton").disabled = false; 
    }
 
}

    
    </script> -->