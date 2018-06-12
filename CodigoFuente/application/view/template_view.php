<?php
include_once ('.\application\model\model_main.php');
$username = strtoupper($_SESSION['login']);
if(isset($_SESSION['nombre']))
    $nombre = $_SESSION['nombre'];
if(isset($_SESSION['apellido']))
    $apellido = $_SESSION['apellido'];
if(isset($_SESSION['idRol']))
    $idRol = $_SESSION['idRol'];
if(isset($_SESSION['idPropietario']))
    $idPropietario = $_SESSION['idPropietario'];

$main = new model_main();
$consorcios = $main->listarConsorcio();
$nombreConsorcioEnUso = $main->getConsorcioEnUsoNombre();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ControlProp</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <link rel="stylesheet" href="../css/estilos.css" />
    <link rel="stylesheet" href="../css/formPropietario.css" />
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <!--datatable-->
    <link rel="stylesheet" type="text/css" href="../dataTables/datatables.css"/>
    <link rel="stylesheet" type="text/css" href="../dataTables/AutoFill-2.2.2/css/autoFill.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="../dataTables/Buttons-1.5.1/css/buttons.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="../dataTables/Scroller-1.4.4/css/scroller.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
<div id="contenedorAlertas" class="div-contenedor-alertas" style=""></div>
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

        <div class="row pr-5 dropdown dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="text-right flex-column pr-3">
                <div class="pb-1"><span class="text-usuario color-usuario"><?php echo($username); ?></span></div>
                <div><span id="usuarioNombre" class="user-name"><?php echo($nombre . " " ); echo($apellido);?></span></div>
            </div>
            <button class="btn btn-circle mt-2" type="button">
                <span class="text-btn-circle">AA</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right opciones mr-5 mt-2 pl-3 pr-3" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Mi cuenta</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/usuario/logout.php" id="aLogOut"><i class="fa fa-power-off"></i>
                    Cerrar sesión</a>
            </div>
        </div>
    </header>
    <div id="contenedorAlertas" class="div-contenedor-alertas"></div>
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="col-xl-3 col-md-3 col-sm-4 px-0 bd-sidebar background-menu-default">
            <?php
             if($idRol == 1 || $idRol == 3)
                 echo '<form class="d-flex flex-column text-center">
                <div class="d-flex flex-column px-5 text-left py-4">
                    <label for="btnConsorcios" class="text-consorcio color-consorcio">CONSORCIO</label>
                    <div class="d-flex justify-content-between  pb-2">
                        <a id="btnConsorcios" class="btn select-consorcio" href="#" data-toggle="collapse" data-target="#collapseConsorcios" aria-expanded="false" aria-controls="collapseConsorcios"></a>
                    </div>
                </div>
                <div class="collapse" id="collapseConsorcios" style="">
                    <ul class="flex-column nav" id="ulConsorcios">
                    </ul>
                </div>
            </form>';
             else{
                    echo '<div class="header-usuario text-center d-flex flex-column justify-content-center align-items-center" 
                            style="height:  60px;">
                                <span id="usuarioNombre" class="user-name">';
                    echo($nombre . " " );
                    echo($apellido);
                    echo'</span></div>';
             }
            ?>

                <nav class="navbar navbar-dark px-0 py-0">
                    <div class="navbar-collapse collapse show menu-sidebar">
                        <ul class="nav flex-column flex-nowrap">
                            <!-- menu dinamico dependiendo del rol de usuario -->
                            <?php
                                if($idRol == 1){
                                    include("menuAdministrador.php");
                                    include("menuOperador.php");
                            }
                                else if($idRol == 3 ){
                                    include("menuOperador.php");
                                }
                                else{
                                    if ( isset($idPropietario)) {
                                       include("menuPropietario.php");
                                    }else{
                                        include("menuUsuario.php");
                                    }  
                                }

                            ?>
                        </ul>
                    </div>
                </nav>

            </div>
            <main class="col-md-9 col-xl-9 col-sm-8 p-0 background-content-default" role="main">
                <?php include 'application/view/'.$content_view; 
                  // if ( !isset($idPropietario)) {
                  //     include("propietario_view.php");
                   // }
                ?>

            </main>
        </div>
        <?php include("footer.php") ?>
    </div>

<script type="text/javascript">
    var consorcios = <?php echo($consorcios);?>;
    var nombreConsorcioEnUso = <?php echo($nombreConsorcioEnUso); ?>

</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/template_main.js"></script>

    <!-- datatable-->
    <script type="text/javascript" src="../dataTables/datatables.js"></script>
   <script type="text/javascript" src="../dataTables/DataTables-1.10.16/js/dataTables.bootstrap4.js"></script>
   <script type="text/javascript" src="../dataTables/AutoFill-2.2.2/js/dataTables.autoFill.js"></script>
   <script type="text/javascript" src="../dataTables/AutoFill-2.2.2/js/autoFill.bootstrap4.js"></script>

   <script type="text/javascript" src="../dataTables/Buttons-1.5.1/js/buttons.bootstrap4.js"></script>
   <script type="text/javascript" src="../dataTables/Buttons-1.5.1/js/buttons.html5.js"></script>
   <script type="text/javascript" src="../dataTables/Buttons-1.5.1/js/buttons.print.js"></script>
   <script type="text/javascript" src="../dataTables/Scroller-1.4.4/js/dataTables.scroller.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>


</body>
</html>
