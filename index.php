<?php include 'Header.html';?>

        <div class="container">
            <h1>Bienvenido al sistema de venta</h1>
                <div class="row">
        <?php
            try{
                include 'modelo/Producto.php';
                $Consulta=CargarListaProductos();
                $Tabla=array();
                foreach ($Consulta as $Fila) {
                    // $Tabla[]=$Fila;
                    // $Id=$Fila["Id"];
                    // $TipoIdentificacion=$Fila["TipoIdentificacion"];
                    // $Identificacion=$Fila["Identificacion"];
                    // $Nombre=$Fila["Nombre"];
                    // $Apellido=$Fila["Apellido"];
                    // $Departamento=$Fila["Apellido"];
                    // $Municipio="";
                    // // $Direccion=$Fila["Direccion"];
                    // $Barrio=$Fila["Barrio"];
                    // $Telefono=$Fila["Telefono"];
                    // $Celular=$Fila["Celular"];
                    $Retorno="";
                    $Retorno="<div class='col-xl'>"
                                ."<div class='card' style='width:18rem;'>"
                                    ."<div class='card-body'>"
                                        ."<h5 class='card-title'>$Fila[Nombre]</h5>"
                                        ."<h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>"
                                        ."<p class='card-text'>"
                                        ."</p>"
                                    ."</div>"
                                ."</div>"
                            ."</div>";
                    echo $Retorno;
                }
            }catch (Exception $e){
                echo "error '$e'";
            }
        ?>
                </div>
        </div>


<?php include("Footer.html"); ?>