$(document).ready(function(){

    cargarTabla();

    //function cargarTabla(){
    //    var dataTable = $("#tablaUsuariosGeneral").DataTable({
    //        "processing": true,
    //        "serverSide": true,
    //        "bPaginate": false,
    //        "bInfo" : false,
    //        scrollY: 300,
    //        scrollCollapse: true,
    //        dom: 'Bfrtip',
    //        buttons: [

    //        ],
    //        "ajax": {
    //            url: "../usuario/listarUsuariosGeneral",
    //            type: "POST"
    //        }
    //    });
    //}

    function cargarTabla(){
        var tablaUsuariosGeneral = $('#tablaUsuariosGeneral').DataTable( {
            lengthChange: false,

            scrollY:        400,
            scrollCollapse: true,
            paging:         true,

        } );
    }

    //$(document).on('click', '.asignarOperador', function(){
    //    var id = $(this).attr("id");

    //        $.ajax({
    //            url:"../usuario/asignar",
    //            method:"POST",
    //            data:{id:id},
    //            success:function(data){
    //                $('#tablaUsuariosGeneral').DataTable().destroy();
    //                cargarTabla();
    //            }
    //        });
    //});

    $(document).on('click', '.asignarOperador', function(){
        var modalConsorcio = $("#modalConsorcio");
        var inputIdUsuario = $("#idUsuario");
        var id = $(this).attr("id");
        inputIdUsuario.val(id);
        modalConsorcio.modal("show");

    });


});