
<div class="container p-5">
    <div class="d-flex">
        <div class ="col-8">
            <h2>Bienvenido a ControlProp</h2>
            <h4>Sistema de Administración de Consorcios</h4>
            <p></p>
        </div>
        <div class="col-4">
            <?php
                if($data['estado'] == 1)
                    echo '<div class="d-flex box-sindeuda rounded justify-content-center align-items-center m-2">
                        <p>No se registran deudas pendientes</p>
                    </div>';
                else
                    echo '<div class="d-flex flex-column box-condeuda rounded justify-content-center align-items-center m-2">
                            <p>Posee una o mas expensas impagas</p>
                            <a href="/expensa/lista">Ver detalles de expensas</a>
                        </div>';
            ?>

            <div class="d-flex flex-column box-reclamos rounded justify-content-center align-items-center m-2">
                <div class="d-flex flex-row"><p>Reclamos realizados: </p><span><?php echo $data['reclamosCantidad']?></span></div>
                <div class="d-flex flex-row"><p>Reclamos aceptados: </p><span><?php echo $data['reclamosAceptados']?></span></div>
            </div>
        </div>
    </div>

</div>



