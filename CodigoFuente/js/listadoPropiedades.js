/**
 * Created by Flor on 02/06/2018.
 */
$(document).ready(function(){

    var dataTable = $("#tablaPropiedades").DataTable({
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
            url: "../propiedad/listar",
            type: "POST"
        }
    });

    dataTable.buttons().container()
        .appendTo( $('.col-md-6:eq(0)', dataTable.table().container() ) );

    //dataTable.button().add( 0, {
    //    action: function ( e, dt, button, config ) {
    //        dt.ajax.reload();
    //    },
    //    text: 'Agregar Propiedad'
    //} );

    $(document).on('click', '.delete', function(){
        var id = $(this).attr("id");
        if(confirm("¿Esta seguro de que desea eliminar este registro?"))
        {
            $.ajax({
                url:"../propiedad/eliminar",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    //$('#tablaPropiedades').DataTable().destroy();

                }
            });
            setInterval(function(){
                $('#alert_message').html('');
                window.location.reload();
            }, 3000);

        }
    });


    var btnGuardarPropiedad = $("#btnGuardarPropiedad");



});
