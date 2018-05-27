<div class="contenedor-formulario">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Nombre</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 206px;">CUIT</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 189px;">Calle</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 60px;">Numero</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 126px;">Codigo Postal</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Teléfono</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($lista = mysqli_fetch_array($data)){
                echo '
                <tr class="gradeA" role="row">
                    <td class="sorting_1">'.$lista['nombre'].'</td>
                    <td>'.$lista['cuit'].'</td>
                    <td>'.$lista['dirCalle'].'</td>
                    <td>'.$lista['dirNumero'].'</td>
                    <td>'.$lista['codPost'].'</td>
                    <td>'.$lista['telefono'].'</td>
                    <td>'.$lista['email'].'</td>
                </tr>
                ';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>





