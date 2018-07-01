$(document).ready(function(){

	$(document).on('click', '#btnGanancias', function(){
        var periodo = $("#NoIconDemo").val();

        $.ajax({
            url:"../consorcio/ganancias",
            method:"POST",
            data:{periodo:periodo},
            success:function(data){
                var datos = JSON.parse(data);
                $('#gnAdm').text(datos.gananciaAdministracion);
                $('#gastoCons').text(datos.gastosPorReclamo);
                $('#ingExp').text(datos.pagosExpensa);
                $("#detalleGanancia").removeAttr("hidden");


        // if(confirm("¿Esta seguro de que desea eliminar este registro?"))
        // {
        //     $.ajax({
        //         url:"../proveedor/eliminar",
        //         method:"POST",
        //         data:{id:id},
        //         success:function(data){
        //             $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');


        //         }
        //     });
        //     setInterval(function(){
        //         $('#alert_message').html(''); window.location.reload();
        //     }, 3000);

        //}

           }
        });
    });

});