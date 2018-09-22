<?php include 'Header.html';?>
<h1>Lista Terceros</h1>
<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tipo Identificación</th>
            <th scope="col">Identificación</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        try{
            $DBServidor = "localhost";
            $DBusuario = "root";
            $DBclave = "123456789";
            $DBNombre = "phpprueba";
            $Conexion=new PDO("mysql:host=localhost;dbname=phpprueba",$DBusuario,$DBclave);
            $Consulta=$Conexion->query("select * from tercero");
            $Tabla=array();
            foreach ($Consulta as $Fila) {
                echo "<tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                echo "<li class='list-group-item list-group-item-action'>"
                    ."$Fila[Nombre] $Fila[Apellido]"
                    ."<div class='btn-group' role='group'>"
                    ."<button id='btnGroupDrop1' type='button' align='right' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' >"
                    ."Opciones"
                    ."</button>"
                    ."<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>"
                    ."<a class='dropdown-item' href='Tercero.php?Id=$Fila[Id]'>Editar</a>"
                    ."<a class='dropdown-item' href='Tercero.php?Id=$Fila[Id]'>Eliminar</a>"
                    ."</div></div>"
                    ."</li>";
            }
            // echo json_encode($Tabla);   
        }catch (Exception $e){
            echo "error '$e'";
        }
    ?>
    </tbody>
</table>
    
<?php include 'Footer.html'; ?>