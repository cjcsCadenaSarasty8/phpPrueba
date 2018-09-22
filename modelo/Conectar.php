<?php

require_once 'DatosConexion.php';
$Conexion=new PDO("MYSQL:HOST="+$DBServidor+";dbname="+$DBNombre,$DBusuario,$DBclave);
?>