<?php include 'Header.html';?>
<div class=container>
    
    <h1>Lista Terceros</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    </nav>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tipo Identificación</th>
                <th scope="col">Identificación</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
    <?php 
        try{
            include 'modelo/Tercero.php';
            $Consulta=ConsultaListaTercero();
            $Tabla=array();
            foreach ($Consulta as $Fila) {
                echo "<tr>"
                    ."<th scope='row'>$Fila[TipoIdentificacion]</th>"
                    ."<td>$Fila[Identificacion]</td>"
                    ."<td>$Fila[Nombre]</td>"
                    ."<td>$Fila[Apellido]</td>"
                    ."<td>$Fila[Estado]</td>"
                    ."<td><div class='btn-group' role='group'>"
                    ."<button id='btnGroupDrop1' type='button' align='right' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' >"
                    ."Opciones"
                    ."</button>"
                    ."<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>"
                    ."<a class='dropdown-item' href='EditarTercero.php?Id=$Fila[Id]'>Editar</a>"
                    ."<a class='dropdown-item' href='EditarTercero.php?Id=$Fila[Id]'>Eliminar</a>"
                    ."</div></div></td>"
                    ."</tr>";
                
            }
            // echo json_encode($Tabla);   
        }catch (Exception $e){
            echo "error '$e'";
        }
    ?>
        </tbody>
    </table>
</div>

<?php include 'Footer.html'; ?>