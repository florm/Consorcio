<h3 class="text-center m-3">Expensas</h3>

<table id="propiedadPropietario" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Piso</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 206px;">Depto</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Consorcio</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($lista = mysqli_fetch_array($data)){
                echo '
                <tr class="gradeA" role="row">
                    <td class="sorting_1">'.$lista['piso'].'</td>
                    <td>'.$lista['depto'].'</td>
                    <td>'.$lista['nombre'].'</td>
                    <td>
                       <div class="d-flex flex-row justify-content-center"><button type="button" name="verExpensas" class="btn btn-success btn-xs verExpensas" id="'.$lista[0].'">Ver Expensas</button> 
                    </td>
                </tr>
                ';
            }
            ?>
            </tbody>
</table>

<div class="m-4 tablaDetalle" hidden="">
    <p class="subheader-formulario-negrita">Lista de expensas..</p>
    <table id="tablaVerExpensas" class="table table-bordered">
        <thead>
            <tr>
                <th>Importe</th>
                <th>Vencimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>

    </table>
</div>

<div class="m-4 detalleGastos" hidden="">
    <p class="subheader-formulario-negrita">Detalle de Gastos</p>
        <table id="detalleGastos" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Detalle de Gasto</th>
                <th>Importe</th>
            </tr>
            </thead>

        </table>
</div>

<div class="modal" id="modalExpensa">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Expensas</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
                <p>El pago se realizó correctamente</p>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript" src="../js/listadoExpensas.js"></script>