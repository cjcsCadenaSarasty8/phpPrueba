<?php

function ConsultaTercero(){

    require 'Conectar.php';
    $Consulta=$Conexion->query("select * from tercero ");
    require_once 'Desconectar.php';

}


?>