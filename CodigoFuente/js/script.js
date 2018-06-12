/**
 * Created by Flor on 20/05/2018.
 */
$(document).ready(function(){

    var consorcios = $('#listaConsorcio').DataTable( {
        lengthChange: false,
        "language": langEsp,
        "buttons": [
            { extend: 'pdf', text: 'Descargar PDF', titleAttr: 'PDF' },

        ],
        scrollY:        400,
        scrollCollapse: true,
        paging:         true,

    } );

    var proveedores = $('#proveedores').DataTable( {
        lengthChange: false,
        "language": langEsp,
        "buttons": [
            { extend: 'pdf', text: 'Descargar PDF', titleAttr: 'PDF' },

        ],
        scrollY:        400,
        scrollCollapse: true,
        paging:         true,

    } );

    var botones = $('#proveedores_wrapper .col-md-6:eq(0)');
    proveedores.buttons().container()
        .appendTo(botones);

    $(document).on('click', '.delete', function(){
        var id = $(this).attr("id");
        if(confirm("¿Esta seguro de que desea eliminar este registro?"))
        {
            $.ajax({
                url:"../proveedor/eliminar",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');


                }
            });
            setInterval(function(){
                $('#alert_message').html(''); window.location.reload();
            }, 3000);

        }
    });




});

var langEsp = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

$("#consorcio").change(function () {
    var idConsorcio = $("#consorcio option:selected").val();
    muestraPropiedades(idConsorcio);
});

function muestraPropiedades(idConsorcio) {
    var parametros = {
        "idConsorcio" : idConsorcio
    };
    $.ajax({
        data:  parametros,
        url:   '../includes/getPropiedades.php',
        type:  'post',
        beforeSend: function () {
            $("#resultado").html("Procesando, espere por favor...");
        },
        success:  function (response) {
            $("#resultado").html(response);
        }
    });
}