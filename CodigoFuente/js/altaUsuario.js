$(document).ready(function(){

    cargarTabla();

    function cargarTabla(){
        var dataTable = $("#tablaUsuariosInactivos").DataTable({
            "processing": true,
            "serverSide": true,
            "bPaginate": false,
            "bInfo" : false,
            scrollY: 300,
            scrollCollapse: true,
            dom: 'Bfrtip',
            buttons: [

            ],
            "ajax": {
                url: "../usuario/listarInactivos",
                type: "POST"
            }
        });
    }

    $(document).on('click', '.habilitarUser', function(){
        var id = $(this).attr("id");

            $.ajax({
                url:"../usuario/altaUsuario",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#tablaUsuariosInactivos').DataTable().destroy();
                    cargarTabla();
                }
            });
    });

    $(document).on('click', '.eliminarUser', function(){
        var id = $(this).attr("id");

            $.ajax({
                url:"../usuario/eliminar",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#tablaUsuariosInactivos').DataTable().destroy();
                    cargarTabla();
                }
            });
    });
});