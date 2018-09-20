<?php

require_once 'DatosConexion.php';
$Conexion = mysql_connect($DBServidor, $DBusuario, $DBclave);
if (!$Conexion) die("No puede conectar a MySQL: " . mysql_error());
$db=mysql_select_db($Conexion,$DBNombre) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>