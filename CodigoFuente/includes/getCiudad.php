<?php 
		$conexion = mysqli_connect('127.0.0.1:3307', 'root', '', 'controlprop');

		$idProvincia = $_POST['idProvincia'];
        
       	$sql = "SELECT id, nombre FROM ciudad WHERE idProvincia = '$idProvincia'";
        $result = mysqli_query($conexion, $sql);
        echo " <label for='#ciudad'>Ciudad</label>";
        echo "<select id='ciudad' name='idCiudad' class='form-control'>";
        echo "<option value='0'>Seleccione Ciudad...</option>";
		 while($fila = mysqli_fetch_array($result))
		 {  
		      //echo "<option value='" . $fila["id"].  "'>" .  " $fila['piso']  . "</option>";
		 		echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
		 }
		 echo "</select>";

 ?>

