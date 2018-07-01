<table id="operadores" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" style="width: 170px;">Usuario</th>
                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($lista = mysqli_fetch_array($data)){
                echo '
                <tr class="gradeA" role="row">
                    <td class="sorting_1">'.$lista['username'].'</td>
                    <td>
                       <div class="d-flex flex-row justify-content-center"><button type="button" name="bajaOperador" class="btn btn-danger btn-xs bajaOperador" id="'.$lista['id'].'">Dar de baja</button> 
                    </td>
                </tr>
                ';
            }
            ?>
            </tbody>
        </table>