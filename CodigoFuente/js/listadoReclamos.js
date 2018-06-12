

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

    $(document).on('click', '.aceptar', function(){
        var id = $(this).attr("id");
        //dibujarFormulario();
            $.ajax({
                url:"../reclamo/aceptar",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#tablaReclamos').DataTable().destroy();
                    cargarTabla();
            });
    });
  
    // function dibujarFormulario(){
    //     var formu = $("<form>").attr('class','contenedor-formulario');
    //     formu.append($("<input>").attr('class', 'form-control').attr('type', 'text').attr('value', 'lalala').attr('id', 'idReclamo').attr('name', 'idReclamo').attr('hidden',''));
    //     formu.append($("<textarea>").attr('class', 'form-control').attr('value', 'lalala').attr('id', 'concepto').attr('name', 'concepto').attr('rows', '5'));
    //     formu.append("<br>");
    //     formu.append($("<input>").attr('class', 'form-control').attr('type', 'date').attr('value', "<?php echo date('Y-m-d'); ?>").attr('id', 'fecha').attr('name', 'fecha').attr('readonly',''));
    //     formu.append("<br>");
    //     formu.append("<br>");
    //     $(".actualizar-reporte").append(formu);
    // }

    //-------------------------

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
                    $('#tablaReclamos').DataTable().destroy();
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
