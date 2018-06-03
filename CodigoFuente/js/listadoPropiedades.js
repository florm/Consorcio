/**
 * Created by Flor on 02/06/2018.
 */
$(document).ready(function(){

    var dataTable = $("#tablaPropiedades").DataTable({
        "processing": true,
        "serverSide": true,
        "bJQueryUI": true,
        "bPaginate": false,
        "bProcessing": true,
        scrollY:        400,
        scrollCollapse: true,
        "ajax": {
            url: "../propiedad/listar",
            type: "POST"
        }
    });


    var btnGuardarPropiedad = $("#btnGuardarPropiedad");



});
