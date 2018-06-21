<form method="post" action="crear" class="contenedor-formulario">
    <p class="subheader-formulario">Complete el siguiente formulario</p>
    <div class="form-group input-size">
            <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="form-group col-md-4">
                <?php
                echo " <select id='sexo' name='idSexo' class='form-control'>";
                echo "<option value='0'>Sexo..</option>";
                $sexo = $data["sexo"];
                for ($row = 0; $row < count($sexo); $row++) {
                    echo "<option value='".$sexo[$row][0]."' >".strtoupper($sexo[$row][1])."</option>"."<br>";
                }
                echo "</select>";
                ?>
            </div>
        </div>
    <div class="form-group input-size">
        <div class="form-row">
            <div class="form-group col-md-4">
                <?php
                echo " <select id='tipoDocumento' name= 'idTipoDocumento' class='form-control'>";
                echo "<option value='0'>Tipo de documento..</option>";
                $tiposDocumento = $data["tiposDocumento"];
                for ($row = 0; $row < count($tiposDocumento); $row++) {
                    echo "<option value='".$tiposDocumento[$row][0]."' >".strtoupper($tiposDocumento[$row][1])."</option>"."<br>";
                }
                echo "</select>";
                ?>
            </div>
            <div class="form-group col-md-8">
                <input type="number" class="form-control" id="numeroDocumento" name="dni" placeholder= "Numero de documento">
            </div>
        </div>
    </div>
    <div class="form-group input-size">
        <input type="number" class="form-control" id="cuit" name="cuil" placeholder="CUIL" required>
    </div>
    <div class="form-group input-size">
        <input type="tel" class="form-control" id="tel" name="tel" placeholder="Teléfono" required>
    </div>
    <div class="form-group col">
        <label>¿Forma parte del Consejo del consorcio?</label><br>
        <div class="custom-control custom-radio">
            <input type="radio" name="consejo" class="custom-control-input" id="consejoTrue" value="1" >
            <label class="custom-control-label" for="consejoTrue">Si</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" name="consejo" class="custom-control-input" id="consejoFalse" value="0" checked="checked">
            <label class="custom-control-label" for="consejoFalse">No</label>
        </div>
    </div>
    <div class="form-group input-size">
        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
    </div>
    <div class="form-group input-size text-center">
        <input type="submit" id="btnGuardarProp" value="GUARDAR" class="btn btn-guardar"></button>
    </div>


</form>
