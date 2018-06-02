/**
 * Created by Flor on 20/05/2018.
 */
$(document).ready(function(){
    var aLogOut = $("#aLogOut");

    aLogOut.click(function(){
        window.location.href = "../usuario/logout";
    });


    var table = $('#example').DataTable( {
        lengthChange: false,
        "language": langEsp,
        "buttons": [
            { extend: 'pdf', text: 'Descargar PDF', titleAttr: 'PDF' },

        ],
        scrollY:        400,
        scrollCollapse: true,
        paging:         false
    } );

    var botones = $('#example_wrapper .col-md-6:eq(0)');
    table.buttons().container()
        .appendTo(botones);

    $("#consorcio").change(function () {
        var idConsorcio = $("#consorcio option:selected").val();
        muestraPropiedades(idConsorcio);           
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