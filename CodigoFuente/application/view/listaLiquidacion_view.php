<table id="liquidaciones" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Periodo</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 206px;">Fecha</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Importe Total</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Detalles</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($lista = mysqli_fetch_array($data)){
                echo '
                <tr class="gradeA" role="row">
                    <td class="sorting_1">'.$lista['periodo'].'</td>
                    <td>'.$lista['fecha'].'</td>
                    <td>'.$lista['importeTotal'].'</td>
                    <td>
                       <div class="d-flex flex-row justify-content-center"><button type="button" name="detalle" class="btn btn-info btn-xs detalle" id="'.$lista['id'].'">Detalle</button> 
                    </td>
                </tr>
                ';
            }
            ?>
            </tbody>
</table>

<div class="m-4 tablaDetalle" hidden="">
    <p class="subheader-formulario-negrita">Detalle de liquidacion..</p>
    <table id="tablaDetalleLiquidacion" class="table table-bordered">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Concepto</th>
                <th>Importe</th>
            </tr>
        </thead>

    </table>
</div>

<script type="text/javascript" src="../js/listadoDetalleLiquidaciones.js"></script>