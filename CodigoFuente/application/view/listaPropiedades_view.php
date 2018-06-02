<form method="post" action="" class="contenedor-formulario">
    <p class="subheader-formulario">Seleccione consorcio</p>
    <div class="form-group input-size">
        <div class="form-row">
            <div class="form-group col-auto">
                <?php

                echo " <select id='consorcio' name='consorcio' class='form-control'>";
                echo "<option value='0' >Seleccione consorcio</option>";

                for ($row = 0; $row < count($data); $row++) {
                    echo "<option value='$data[$row]' >".strtoupper($data[$row])."</option>"."<br>";
                }
                echo "</select>";
                ?>
            </div>
        </div>
        <div class="form-group input-size">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <select name="" id="">
                        <option value="0">Propiedades</option>
                    </select>
                </div>
            </div>
        </div>



</form>