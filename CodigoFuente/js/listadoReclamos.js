$(document).ready(function(){

    cargarTabla();

    function cargarTabla(){
        var dataTable = $("#tablaReclamos").DataTable({
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
                url: "../reclamo/listar",
                type: "POST"
            }
        });
    }

    $(document).on('click', '.rechazar', function(){
        var id = $(this).attr("id");

            $.ajax({
                url:"../reclamo/rechazar",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#tablaReclamos').DataTable().destroy();
                    cargarTabla();

                }
            });
    });
});