/**
 * Created by Flor on 02/06/2018.
 */
$(document).ready(function(){

    cargarTabla();

    function cargarTabla(){
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

        //dataTable.buttons().container()
        //    .appendTo( $('.col-md-6:eq(0)', dataTable.table().container() ) );

        //dataTable.button().add( 0, {
        //    action: function ( e, dt, button, config ) {
        //        dt.ajax.reload();
        //    },
        //    text: 'Agregar Propiedad'
        //} );
    }

    $('#agregarPropiedad').click(function(){
        var html = '<tr>';
        html += '<td contenteditable id="piso"></td>';
        html += '<td contenteditable id="depto"></td>';
        html += '<td contenteditable id="porcentajeParticipacion"></td>';
        html += '<td  class="text-center">' +
            '<button type="button" name="insertar" id="insertar" class="btn btn-success btn-xs mr-1">Insertar</button>' +
            '<button type="button" name="eliminar" id="eliminar" class="btn btn-info">Deshacer</button></td>';
        html += '</tr>';
        $('#tablaPropiedades tbody').prepend(html);
    });

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
                    $('#tablaPropiedades').DataTable().destroy();
                    cargarTabla();

                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 3000);

        }
    });

    $(document).on('click', '#insertar', function(){
        var piso = $('#piso').text();
        var depto = $('#depto').text();
        var porcentajeParticipacion = $('#porcentajeParticipacion').text();

        if(piso != '' && depto != '' && porcentajeParticipacion != '')
        {
            $.ajax({
                url:"../propiedad/altaSimple",
                method:"POST",
                data:{piso:piso, depto:depto, porcentajeParticipacion: porcentajeParticipacion},
                success:function(data)
                {
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#tablaPropiedades').DataTable().destroy();
                    cargarTabla()
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);
        }
        else
        {
            alert("Verifique que los campos se encuentren completos");
        }

    });

    $(document).on('click', '#eliminar',function(){
         $(this).parent().parent().remove();
    });


});
