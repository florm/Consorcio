$(document).ready(function(){

    $(document).on('click', '.verExpensas', function(){
        $('#tablaVerExpensas').DataTable().destroy();
        var id = $(this).attr("id");
        var dataTable = $("#tablaVerExpensas").DataTable({
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
                url: "../expensa/listarExpensas",
                type: "POST",
                data:{id:id}
            }
        });

        $(".tablaDetalle").removeAttr("hidden");

    });

    $(document).on('click','#btnDetalles', function(){

        $('#detalleGastos').DataTable().destroy();
        var idLiquidacion = $(this).attr("idLiquidacion");
        var idPropiedad = $(this).attr("idPropiedad");
        var dataTable = $("#detalleGastos").DataTable({
            "processing": true,
            "serverSide": true,
            "bPaginate": false,
            "bInfo" : false,
            scrollY: 300,
            scrollCollapse: true,
            dom: 'Bfrtip',
            buttons: [
                { extend: 'pdf', text: 'Descargar PDF', titleAttr: 'PDF' },

            ],
            "ajax": {
                url: "../expensa/detalle",
                type: "POST",
                data:{
                    idLiquidacion:idLiquidacion,
                    idPropiedad : idPropiedad
                }
            }
        });

        $(".detalleGastos").removeAttr("hidden");
    });
});