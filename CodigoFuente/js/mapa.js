/**
 * Created by Flor on 27/06/2018.
 */
$(document).ready(function(){
    cargarMapa();
})

function cargarMapa() {

    var mapOptions = {
        center:new google.maps.LatLng(-34.6686986,-58.5614947),
        zoom:12,
        panControl: true,
        zoomControl: true,
        scaleControl: false,
        mapTypeControl:false,
        streetViewControl:true,
        overviewMapControl:true,
        rotateControl:true,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("mapa"),mapOptions);

    //var marker = new google.maps.Marker({
    //    position: new google.maps.LatLng(-34.6686986,-58.5614947),
    //    map: map
    //});
    cargarMarcadores(map);
}

function cargarMarcadores(map){
    $.each(window.consorcios, function(i,item){
        var marker = i;
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(item['lat'],item['lng']),
            map: map
        });
        var info = new google.maps.InfoWindow({
            content: "Consorcio " + item['nombre']
        });

        google.maps.event.addListener(marker, 'click', function() {
            info.open(map,marker);
        });

    });
}


