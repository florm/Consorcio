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
    
});