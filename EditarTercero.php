<?php 

include 'Header.html';


?>
<?php 
    $Id=0;
    $TipoIdentificacion="";
    $Identificacion="";
    $Nombre="";
    $Apellido="";
    $Departamento="";
    $Municipio="";
    $Direccion="";
    $Barrio="";
    $Telefono="";
    $Celular="";

    try{
        $Id = $_GET['Id'];
        include 'modelo/Tercero.php';
        $Consulta=ConsultaTercero($Id);
        $Tabla=array();
        foreach ($Consulta as $Fila) {
            $Tabla[]=$Fila;
            $Id=$Fila["Id"];
            $TipoIdentificacion=$Fila["TipoIdentificacion"];
            $Identificacion=$Fila["Identificacion"];
            $Nombre=$Fila["Nombre"];
            $Apellido=$Fila["Apellido"];
            $Departamento=$Fila["Apellido"];
            $Municipio="";
            $Barrio=$Fila["Barrio"];
            $Telefono=$Fila["Telefono"];
            $Celular=$Fila["Celular"];
        }
    }catch (Exception $e){
        echo "error '$e'";
    }
?>
<div class=container>
    <h1>Editar Tercero</h1>
    <hr>

    <form> 

        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoTipoIdentificacion">Tipo Identificación:</label>
                    <select id="CampoTipoIdentificacion" class="form-control" value="<?php echo $TipoIdentificacion; ?>">
                        <option value="" >Seleccione una opción</option>
                        <?php
                            require_once 'Constante/TipoDocumento.php';
                            foreach($ListaTipoDocumento as $Tipo){
                                $Retorno="";
                                $Retorno="<option value=$Tipo";
                                if($TipoIdentificacion==$Tipo){
                                    $Retorno=$Retorno." selected";
                                }
                                $Retorno=$Retorno.">$ListaTipoDocumentoDescripcion[$Tipo]</option>";
                                echo $Retorno;
                            }
                        ?>
                    </select>
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
                    <label for="CampoNombre">Nombre:</label>
                    <input id="CampoNombre" type="text" class="form-control" value="<?php echo $Nombre; ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoApellido">Apellido:</label>
                    <input id="CampoApellido" type="text" class="form-control" value="<?php echo $Apellido; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoDireccion">Dirección:</label>
                    <input id="CampoDireccion" type="text" class="form-control" value="<?php echo $Direccion; ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoBarrio">Barrio:</label>
                    <input id="CampoBarrio" type="text" class="form-control" value="<?php echo $Barrio; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoDepartamento">Departamento:</label>
                    <!-- <input id="CampoDepartamento" type="text" class="form-control" value="<?php echo $Direccion; ?>"> -->
                    <select id="CampoDepartamento" class="form-control" value="<?php echo $TipoIdentificacion; ?>">
                        <option value="" >Seleccione una opción</option>
                        <?php
                            require 'modelo/Municipio.php';
                            $Lista=ConsultaListaDepartamento();
                            foreach($Lista as $Tipo){
                                $Retorno="";
                                $Retorno="<option value=$Tipo";
                                if($TipoIdentificacion==$Tipo){
                                    $Retorno=$Retorno." selected";
                                }
                                $Retorno=$Retorno.">$ListaTipoDocumentoDescripcion[$Tipo]</option>";
                                echo $Retorno;
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoMunicipio">Municipio:</label>
                    <input id="CampoMunicipio" type="text" class="form-control" value="<?php echo $Barrio; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoTelefono">Telefono:</label>
                    <input id="CampoTelefono" type="text" class="form-control" value="<?php echo $Telefono; ?>">
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label for="CampoCelular">Celular:</label>
                    <input id="CampoCelular" type="text" class="form-control" value="<?php echo $Celular; ?>">
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary" >Guardar</button>
    </form>
</div>
    
<?php include 'Footer.html'; ?>