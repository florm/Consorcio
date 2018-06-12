

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

    $('#agregarPropiedad').click(function(){
        var html = '<tr>';
        html += '<td contenteditable id="piso"></td>';
        html += '<td contenteditable id="depto"></td>';
        html += '<td contenteditable id="porcentajeParticipacion"></td>';
        html += '<td  class="text-center">' +
            '<button type="button" name="insertar" id="insertar" class="btn btn-success btn-xs mr-1">Insertar</button>' +
            '<button type="button" name="eliminar" id="eliminar" class="btn btn-info">Deshacer</button></td>';
        html += '</tr>';

        $('#tablaReclamos tbody').prepend(html);
    });

    // $(document).on('click', '.delete', function(){
    //     var id = $(this).attr("id");
    //     if(confirm("¿Esta seguro de que desea eliminar este registro?"))
    //     {
    //         $.ajax({
    //             url:"../propiedad/eliminar",
    //             method:"POST",
    //             data:{id:id},
    //             success:function(data){
    //                 $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
    //                 $('#tablaReclamos').DataTable().destroy();
    //                 cargarTabla();

    //             }
    //         });
    //         setInterval(function(){
    //             $('#alert_message').html('');
    //         }, 3000);

    //     }
    // });

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

    //--------------------------
    $(document).on('click', '.aceptar', function(){
        var id = $(this).attr("id");
        dibujarFormulario();
            $.ajax({
                url:"../reclamo/aceptar",
                method:"POST",
                data:{idPropiedad:idPropiedad},
            });
    });
  
    function dibujarFormulario(){
        // var form = $("<form/>");
        // form.append($("<input>").attr('input1', '5').attr('type', 'text'));
        // form.append('<br>');
        // form.append($("<input>").attr('type', 'submit'));
        //<input type="date" class="form-control" id="fecha"name="fecha" value="<?php echo date("Y-m-d"); ?>" hidden>
        var formu = $("<form>").attr('class','contenedor-formulario');
        formu.append($("<input>").attr('class', 'form-control').attr('type', 'text').attr('value', 'lalala').attr('id', 'idReclamo').attr('name', 'idReclamo').attr('hidden',''));
        formu.append($("<textarea>").attr('class', 'form-control').attr('value', 'lalala').attr('id', 'concepto').attr('name', 'concepto').attr('rows', '5'));
        formu.append("<br>");
        //VER COMO METER LA FECHA EN JS
        formu.append($("<input>").attr('class', 'form-control').attr('type', 'date').attr('value', "<?php echo date('Y-m-d'); ?>").attr('id', 'fecha').attr('name', 'fecha').attr('readonly',''));
        formu.append("<br>");
        
        formu.append("<br>");
        $(".actualizar-reporte").append(formu);


    }
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
