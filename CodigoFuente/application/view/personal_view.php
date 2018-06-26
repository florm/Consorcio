<div class="m-4">
    <table id="tablaUsuariosGeneral" class="table table-bordered">
        <thead>
        <tr role="row">
            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 206px;">Usuario</th>
            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  style="width: 110px;">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($lista = mysqli_fetch_array($data[0])){
            echo '
                <tr class="gradeA" role="row">
                    <td class="sorting_1">'.$lista['username'].'</td>
                    <td>
                       <div class="d-flex flex-row justify-content-center"><button type="button" name="asignarOperador" data-toggle="modal" data-target="#modalConsorcio" class="btn btn-success btn-xs asignarOperador" id="'.$lista['id'].'">Asignar Operador</button> 
                    </td>
                </tr>
                ';
        }
        ?>
        </tbody>
    </table>

</div>
<br>
<div class="modal" id="modalConsorcio">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="">
                    <select>
                        <?php
                        while($lista = mysqli_fetch_array($data[1])){
                            echo ' <option value="'.$lista['id'].'">'.$lista['nombre'].'</option>';
                        }
                        ?>
                    </select>
                    <input id="idUsuario" type="text" value="" >
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript" src="../js/listaUsuariosGeneral.js"></script>