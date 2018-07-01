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
                <h4 class="modal-title">Asignar Operadores</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="../consorcio/asignarOperador" method="post">
                    <p class="m-2 text-center">Seleccionar Consorcio</p>
                        <?php
                        while($lista = mysqli_fetch_array($data[1])){
                            echo '<div class="form-check">
                                <input type="checkbox" name="consorcios[]" value="'.$lista['id'].'" class="form-check-input" id="'.$lista['id'].'">
                                <label class="form-check-label" for="'.$lista['id'].'">'.$lista['nombre'].'</label>
                            </div>';

                        }
                        ?>
                    <input id="idUsuario" name="idUsuario" type="text" value="" hidden>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript" src="../js/listaUsuariosGeneral.js"></script>

<!--<form action="">
    Seleccionar Consorcio
    <div class="form-check">
        <input type="checkbox" name="consorcios" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
    </div>
    <select>
        <?php
/*        while($lista = mysqli_fetch_array($data[1])){
            echo ' <option value="'.$lista['id'].'">'.$lista['nombre'].'</option>';
        }
        */?>
    </select>
    <input id="idUsuario" type="text" value="" >
</form>-->