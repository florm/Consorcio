<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="#" />
    <title>Login</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/login.css" />
 
</head>
<body>
    <div id="contenedorAlertas" class="div-contenedor-alertas-login"></div>

    <div class="d-flex justify-content-between">
        <img class="p-4 ml-4" src="@Url.Content("~/images/datco-white.png")" alt="Grupo Datco" />
        <span class="p-4 mr-5 mt-3 ayuda-text text-white">Ayuda</span>
    </div>
    <div class="d-flex justify-content-center">
        <form class="contenedor-formulario" novalidate>
            <img class="img-cprop" src="" alt="CProp" />
            <p class="header-formulario">Bienvenido</p>
            <p class="subheader-formulario">Ingrese a nuestro sistema de Control, Tiempo y Asistencia</p>
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
                Revise su Usuario y Contraseña e intente ingresar nuevamente o escribanos a <strong>soporte@datco.com</strong>
            </div>

            <button type="button" id="ingresar" class="btn btn-ingresar">INGRESAR</button>
        </form>
    </div>
    <br />
    <?php include_once("footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
