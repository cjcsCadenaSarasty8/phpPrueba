<?php

function ConsultaListaTercero(){
    include 'modelo/Conexion.php';
    $Consulta=$Conexion->query("select * from tercero ");
    return $Consulta;
}

function ConsultaTercero($IdTercero){
    include 'modelo/Conexion.php';
    $Consulta=$Conexion->query("select * from tercero where Id=".$IdTercero);
    return $Consulta;
}


?>