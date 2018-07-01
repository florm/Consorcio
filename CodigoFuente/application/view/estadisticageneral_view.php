<div class="contenedor-formulario">
    <p class="subheader-formulario">Ganancias</p>
    <div class="form-group input-size">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p>
                        <input id="NoIconDemo" type="text" class="form-control" name="periodo" placeholder="Seleccione mes.." />
                    </p>
                </div>

                <div class="form-group col-md-6 text-center">
                    <p>
                    <input type="submit" id="btnGanancias" value="MOSTRAR" class="btn btn-guardar m-0"></button>
                     </p>
            </div>
                
            </div>
            
    </div> 
</div> 
      
<div id="detalleGanancia" hidden="">

    <div class="container p-5">
        <div class="d-flex justify-content-center">
            <div class="col-8 ">
                <div class="d-flex flex-column box-estadistica box-estadistica1 rounded justify-content-center align-items-center m-2">
                    <div class="d-flex flex-row"><p>Gastos de Consorcio: $<span id="gastoCons"></span></p></div>
                    <div class="d-flex flex-row"><p>Ingresos por Expensa: $<span id="ingExp"></span></p></div>
                    <div class="d-flex flex-row"><p>Ganancia Administración: $<span id="gnAdm"></span></p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../js/ganancias.js"></script>