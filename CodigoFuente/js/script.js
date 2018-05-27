/**
 * Created by Flor on 20/05/2018.
 */
$(document).ready(function(){
    var aLogOut = $("#aLogOut");

    aLogOut.click(function(){
        window.location.href = "../usuario/logout";
    });

    var table = $('#example').DataTable( {
        lengthChange: false,
        "buttons": [
            { extend: 'pdfHtml5', text: 'Descargar PDF', titleAttr: 'PDF' }
        ]
    } );

    var botones = $('#example_wrapper .col-md-6:eq(0)');
    table.buttons().container()
        .appendTo(botones);

    table.$('td').click( function () {
         var sData = table.fnGetData( this );
         alert( 'The cell clicked on had the value of '+sData );
      } );
});