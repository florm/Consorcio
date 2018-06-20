$(document).ready(function(){

    $(document).on('click', '.detalle', function(){
        var id = $(this).attr("id");
        var dataTable = $("#tablaDetalleLiquidacion").DataTable({
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
                url: "../liquidacion/listarDetalles",
                type: "POST",
                data:{id:id}
            }
        });
        $(".tablaDetalle").removeAttr("hidden");
    });
    
});