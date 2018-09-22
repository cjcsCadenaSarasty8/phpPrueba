<?php include 'Header.html';?>

    <?php 
        $Id=0;
        $TipoIdentificacion="";
        $Identificacion="";
        $Nombre="";
        $Apellido="";
        try{
            $Id = $_GET['Id'];
            $DBServidor = "localhost";
            $DBusuario = "root";
            $DBclave = "123456789";
            $DBNombre = "phpprueba";
            $Conexion=new PDO("mysql:host=localhost;dbname=phpprueba",$DBusuario,$DBclave);
            $Consulta=$Conexion->query("select * from tercero where Id=".$Id);
            $Tabla=array();
            foreach ($Consulta as $Fila) {
                $Tabla[]=$Fila;
                $Id=$Fila["Id"];
                $TipoIdentificacion=$Fila["TipoIdentificacion"];
                $Identificacion=$Fila["Identificacion"];
                $Nombre=$Fila["Nombre"];
                $Apellido=$Fila["Apellido"];
            }
        }catch (Exception $e){
            echo "error '$e'";
        }
    ?>
<div class=container>
    <h1>Editar Terceros</h1>
    <hr>

    <form> 

        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoTipoIdentificacion">Tipo Identificación:</label>
                    <input id="CampoTipoIdentificacion" type="text" class="form-control" value="<?php echo $TipoIdentificacion; ?>">
                    <!-- <select id="CampoTipoIdentificacion" class="form-control" value="<?php echo $TipoIdentificacion; ?>">
                        <option>Seleccione una opción</option>
                        <option>CC</option>
                        <option>RC</option>
                        <option>TI</option>
                        <option>NIT</option>
                    </select> -->
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoTipoIdentificacion">Identificación:</label>
                    <input id="CampoIdentificacion" type="text" class="form-control" value="<?php echo $Identificacion; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoTipoIdentificacion">Nombre:</label>
                    <input id="CapoNombre" type="text" class="form-control" value="<?php echo $Nombre; ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoTipoIdentificacion">Apellido:</label>
                    <input id="CampoApellido" type="text" class="form-control" value="<?php echo $Apellido; ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" >Guardar</button>
    </form>
</div>
    
<?php include 'Footer.html'; ?>