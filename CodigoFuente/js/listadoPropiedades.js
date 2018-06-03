/**
 * Created by Flor on 02/06/2018.
 */
$(document).ready(function(){
    var consorcio = $("#consorcio-prop");
    var listaPropiedades = $('#example').DataTable( {
        lengthChange: false,
        "buttons": [
            { extend: 'pdf', text: 'Descargar PDF', titleAttr: 'PDF' }
        ],
        scrollY:        400,
        scrollCollapse: true,
        paging:         false
    } );
    var botones = $('#example_wrapper .col-md-6:eq(0)');
    listaPropiedades.buttons().container()
        .appendTo(botones);

    consorcio.change(function (){
        idConsorcio =  $("#consorcio-prop option:selected").val();
        $.ajax({
            type: "POST",
            url: "../propiedad/listar",
            data:{idConsorcio : idConsorcio},
            success: function(data) {
                $("#resultado").html(data);
            }
        });
    });

    var btnAgregarPropiedad = $("#btnAgregarPropiedad");
    btnAgregarPropiedad.click(function(){
        var formPropiedad = $("#formPropiedad");
        formPropiedad.removeAttr("hidden");


    });

    var btnGuardarPropiedad = $("#btnGuardarPropiedad");

    btnGuardarPropiedad.click(function(){
        propiedad = new Object();
        propiedad.piso = $("input[name='piso']").val();
        propiedad.depto = $("input[name='depto']").val();
        propiedad.porcentajeParticipacion = $("input[name='porcentajeParticipacion']").val();
        propiedad.idConsorcio = $("#consorcio-prop option:selected").val();
        $.ajax({
            type: "POST",
            url: "../propiedad/altaSimple",
            data:{propiedad : propiedad},
            success: function(data) {
                $("#bodyPropiedad").append(data);
            }
        });
    })

});
