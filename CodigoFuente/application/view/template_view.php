<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <link rel="stylesheet" href="/css/estilos.css" />
    
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    </head>
<body>
    <header class="navbar">
        <a class="navbar-brand" href="#">
            <img src="/imagenes/logoApp.png" class="d-inline-block align-top img-logo pl-2 pr-5" alt="">
        </a>
        <form class="form-inline">
            <div class="input-group anchear">
                <input type="search" class="form-control input-busqueda" placeholder="Buscar" aria-label="Buscar" aria-describedby="lupita">
                <div class="input-group-append">
                    <span class="input-group-text" id="lupita"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </form>
        <div class="row pr-5">
            <div class="text-right flex-column pr-3">
                <div class="pb-1"><span class="text-usuario color-usuario"><?php echo($data) ?></span></div>
                <div><span id="usuarioNombre" class="user-name">Nombre Apellido</span></div>
            </div>
            <button type="button" class="btn btn-circle mt-2"><span class="text-btn-circle">FM</span></button>
        </div>
    </header>
    <div id="contenedorAlertas" class="div-contenedor-alertas"></div>
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="col-xl-3 col-md-3 col-sm-4 px-0 bd-sidebar background-menu-default">

            <form class="d-flex flex-column text-center">
                <div class="d-flex flex-column px-5 text-left py-4">
                    <label for="btnConsorcios" class="text-consorcio color-consorcio">CONSORCIO</label>
                    <div class="d-flex justify-content-between  pb-2">
                        <a id="btnConsorcios" class="btn select-consorcio" href="#" data-toggle="collapse" data-target="#collapseConsorcios" aria-expanded="false" aria-controls="collapseConsorcios">Consorcio1 ▾</a>
                    </div>
                </div>
                <div class="collapse" id="collapseConsorcios" style="">
                        <ul class="flex-column nav" id="ulConsorcios">
                            <li class="nav-item"><a class="nav-link item-consorcio" href="#" id="2">Consorcio2</a></li>
                            <li class="nav-item"><a class="nav-link item-consorcio" href="#" id="3">Consorcio3</a></li>
                        </ul>
                </div>
               
            </form>
                <nav class="navbar navbar-dark px-0 py-0">
                    <div class="navbar-collapse collapse show menu-sidebar">
                        <ul class="nav flex-column flex-nowrap">
                           
                            <li class="nav-item borde-top text-left">
                                <span class="collapsed nav-link menu-sidebar-item py-3 pl-5" data-toggle="collapse" data-target="#submenu-administracion">
                                    <img src="/imagenes/iconos/admin.svg" alt="adm" class="pr-3" /> Administración
                                </span>
                                <div class="collapse" id="submenu-administracion" aria-expanded="false">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="nav-link menu-sidebar-item interno py-3" href="#">Operadores</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link menu-sidebar-item interno py-3" href="#">Cuenta Corriente</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                                                            
                            <li class="nav-item borde-top text-left">
                                <a class="nav-link menu-sidebar-item py-3 pl-5" idmenu="1" href="#">
                                    <img src="/imagenes/iconos/pagos.svg" alt="exp" class="pr-3" /> Realizar Pago
                                </a>
                            </li>

                            <li class="nav-item borde-top text-left">
                                <a class="nav-link menu-sidebar-item py-3 pl-5" idmenu="1" href="#">
                                    <img src="/imagenes/iconos/expensas.svg" alt="exp" class="pr-3" /> Ver Expensas
                                </a>
                            </li>
                                
                            <li class="nav-item borde-top text-left">
                                <a class="nav-link menu-sidebar-item py-3 pl-5" idmenu="1" href="#">
                                    <img src="/imagenes/iconos/reclamos.svg" alt="exp" class="pr-3" /> Reclamos
                                </a>
                            </li>
                            
                            <li class="nav-item borde-top text-left">
                                <span class="collapsed nav-link menu-sidebar-item py-3 pl-5" data-toggle="collapse" data-target="#submenu-reportes">
                                    <img src="/imagenes/iconos/admin.svg" alt="adm" class="pr-3" /> Reportes
                                </span>
                                <div class="collapse" id="submenu-reportes" aria-expanded="false">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="nav-link menu-sidebar-item interno py-3" href="#">Consorcio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link menu-sidebar-item interno py-3" href="#">Cuenta Corriente</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                
            </div>
            <main class="col-md-9 col-xl-9 col-sm-8 p-0 background-content-default" role="main">
                <!-- <?php include 'application/view/'.$content_view; ?> -->
            </main>
        </div>
        <?php include("footer.php") ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
