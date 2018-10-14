<?php

function ConsultaListaDepartamento(){
    include 'modelo/Conexion.php';
    $Consulta=$Conexion->query("select CodigoDepartamento,NombreDepartamento from municipio group by NombreDepartamento");
    return $Consulta;
}

function ConsultaListaMunicipio($IdTercero){
    include 'modelo/Conexion.php';
    $Consulta=$Conexion->query("select * from tercero where Id=".$IdTercero);
    return $Consulta;
}


?>