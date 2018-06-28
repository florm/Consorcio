$(document).ready(function(){
    var aLogOut = $("#aLogOut");
    var btnConsorcios = $("#btnConsorcios");
    var ulConsorcios =$("#ulConsorcios");


    aLogOut.click(function(){
        window.location.href = "../usuario/logout";
    });

    cargarConsorcios();


    function cargarConsorcios(){
        $.each(window.consorcios, function(i,item){
                const li = $('<li>');
                li.addClass("nav-item");
                const a = $("<a>");
                a.addClass("nav-link item-consorcio");
                a.attr("href", "#");
                a.text(item['nombre']);
                a.attr("id", item['id']);
                li.append(a);
                ulConsorcios.append(li);
                btnConsorcios.text(item['nombre'] + "▾");

        });
    }

    $(".nav-link.item-consorcio").click(function(){
        idConsorcio = $(this).attr("id");
        nombreConsorcio = $(this).text();
        $.ajax({
            data:  {
                idConsorcio : idConsorcio,
                nombreConsorcio : nombreConsorcio
            },
            url:   '../main/cambiarConsorcio',
            type:  'post',
            success:  function (response) {
                window.location.reload();
            }
        });
    });




});

