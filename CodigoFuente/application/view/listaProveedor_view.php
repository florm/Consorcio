
<div id="alert_message"></div>
<table id="proveedores" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Nombre</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 206px;">CUIT</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Teléfono</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($lista = mysqli_fetch_array($data)){
                echo '
                <tr class="gradeA" role="row">
                    <td class="sorting_1">'.$lista['nombre'].'</td>
                    <td>'.$lista['cuit'].'</td>
                    <td>'.$lista['telefono'].'</td>
                    <td>
                       <div class="d-flex flex-row justify-content-center"><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$lista['id'].'">Borrar</button> 
                    </td>
                </tr>
                ';
            }
            ?>
            </tbody>
        </table>