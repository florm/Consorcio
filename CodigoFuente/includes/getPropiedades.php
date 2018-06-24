<?php 
		$conexion = mysqli_connect('127.0.0.1:3307', 'root', '', 'controlprop');

		$idConsorcio = $_POST['idConsorcio'];
        
       	$sql = "SELECT id, piso, depto, idPropietario FROM propiedad WHERE idConsorcio = '$idConsorcio'";
        $result = mysqli_query($conexion, $sql);
        echo "<select name='idPropiedad' class='form-control'>";
        echo "<option value='0'>Departamento...</option>";
		 while($fila = mysqli_fetch_array($result))
		 {  
		 	if($fila["idPropietario"] == 0){
		      echo "<option value='" . $fila["id"].  "'>" .  " Piso " . $fila["piso"] .  " Depto " . $fila["depto"] . "</option>";
		 	}else{
		 		echo "<option disabled='' value='" . $fila["id"].  "'>" .  " Piso " . $fila["piso"] .  " Depto " . $fila["depto"] . "</option>";
		 	}
		 }
		 echo "</select>";

 ?>

