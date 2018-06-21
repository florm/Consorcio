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

    
});