
<div class="container p-5">
    <div class="d-flex justify-content-center">
        <div class="col-8 ">
            <div class="d-flex flex-column box-estadistica box-estadistica1 rounded justify-content-center align-items-center m-2">
                <div class="d-flex flex-row"><p><span><?php echo $nombreConsorcioEnUso?></span></p></div>
                <div class="d-flex flex-row"><p>Cantidad Propiedades: "</p><span><?php echo $data['cantidadPropiedades']?>"</span></div>
        	</div>
    	</div>
	</div>
	<div class="d-flex justify-content-center">
        <div class="col-8 ">
            <div class="d-flex flex-column box-estadistica box-estadistica2 rounded justify-content-center align-items-center m-2">
                <div class="d-flex flex-row"><p>Cobranzas Realizadas: "</p><span><?php echo $data['expensasPagadas']?>"</span></div>
                <div class="d-flex flex-row"><p>Cobranzas Totales: "</p><span><?php echo $data['expensasTotales']?>"</span></div>
            </div>
        </div>
    </div>
	<div class="d-flex justify-content-center">
        <div class="col-8 ">
            <div class="d-flex flex-column box-estadistica box-estadistica3 rounded justify-content-center align-items-center m-2">
                <div class="d-flex flex-row"><p>Reclamos Aceptados: "</p><span><?php echo $data['reclamosAceptados']?>"</span></div>
                <div class="d-flex flex-row"><p>Reclamos Totales: "</p><span><?php echo $data['reclamosTotales']?>"</span></div>
            </div>
        </div>
    </div>
</div>