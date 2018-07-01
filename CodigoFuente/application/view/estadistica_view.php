<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="container p-5">
    <div class="d-flex justify-content-center">
        <div class="col-8 ">
            <div class="d-flex flex-column box-estadistica box-estadistica1 rounded justify-content-center align-items-center m-2">
                <div class="d-flex flex-row"><p><span><?php echo $nombreConsorcioEnUso?></span></p></div>
                <div class="d-flex flex-row"><p>Cantidad Propiedades:</p><span> <?php echo $data['cantidadPropiedades']?></span></div>
        	</div>
    	</div>
	</div>

</div>
<div class="d-flex m-2">
    <div class="col-6 text-center chartReclamos">
        <div id="chartReclamos"></div>
        <p>Reclamos Totales: <span><?php echo $data['reclamosTotales']?></span></p>
    </div>
    <div class="col-6 text-center chartCobranzas">
        <div id="chartCobranzas"></div>
        <p>Cobranzas Totales: <span><?php echo $data['expensasTotales']?></span></p>
    </div>
</div>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});

    var totalReclamos = <?php echo $data['reclamosTotales']?>;
    var totalCobranzas = <?php echo $data['expensasTotales']?>;

    if(totalReclamos !=0)
        google.charts.setOnLoadCallback(dibujarReclamos);
    if(totalCobranzas !=0)
        google.charts.setOnLoadCallback(dibujarCobranzas);

    // Draw the chart and set the chart values
    function dibujarCobranzas() {
        var data = google.visualization.arrayToDataTable([
            ['Expensas', 'Estado'],
            ['Expensas Pagadas', <?php echo $data['expensasPagadas']?>],
            ['Expensas Impagas',<?php echo $data['expensasImpagas']?>],

        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title':'Cobranzas', 
            pieHole: 0.3,
            colors: ['#e0440e', '#ec8f6e']

        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('chartCobranzas'));
        chart.draw(data, options);
    }
    function dibujarReclamos() {
        var data = google.visualization.arrayToDataTable([
            ['Reclamos', 'Estado'],
            ['No Aceptados', <?php echo $data['reclamosNoAceptados']?>],
            ['Aceptados',<?php echo $data['reclamosAceptados']?>],


        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title':'Reclamos', 
            pieHole: 0.3,
            colors: ['#3366cc', '#6a8ed6']
            
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('chartReclamos'));
        chart.draw(data, options);
    }
</script>