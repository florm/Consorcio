/**
 * Created by Flor on 20/05/2018.
 */
$(document).ready(function(){
    var piso = $("input[name=piso]");
    var btnAgregarPropiedad = $("#btnAgregarPropiedad");
  var contenedorPropiedad = $("#contenedorPropiedad");
 var modeloPropiedad = $(".modeloPropiedad");
  btnAgregarPropiedad.click(function(){
        var modelo = modeloPropiedad.clone();
        modelo.addClass("atributos-propiedad");
        modelo.removeAttr('hidden');
        contenedorPropiedad.append(modelo);

  });

  var btnGuardarPropiedad = $("#btnGuardarPropiedad");
  var mensaje = $("#mensaje");

  btnGuardarPropiedad.click(function(){
      var atributosPropiedad = $(".atributos-propiedad");
      propiedades = new Array();
      $.each(atributosPropiedad, function(i,item){
          propiedad = new Object();
          propiedad.piso = $(item).find("input[name='piso']").val();
          propiedad.depto = $(item).find("input[name='depto']").val();
          propiedad.porcentajeParticipacion = $(item).find("input[name='porcentajeParticipacion']").val();
          propiedad.idConsorcio = $("#idConsorcio").val();
          propiedades.push(propiedad);
      });
      $.ajax({
          type: "POST",
          url: "alta",
          data:{propiedades :propiedades},
          success: function(data) {
              mostrarAlerta("mensajeprueba", "s", false)
          }
      });
  })

    function mostrarAlerta(mesaje, tipo){

    }
});


