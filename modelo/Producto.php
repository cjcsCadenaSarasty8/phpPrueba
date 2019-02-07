<?php

function CargarListaProductos(){
    include 'modelo/Conexion.php';
    $Consulta=$Conexion->query("select * from producto");
    return $Consulta;
}

// function ConsultaListaMunicipio($IdTercero){
//     include 'modelo/Conexion.php';
//     $Consulta=$Conexion->query("select * from tercero where Id=".$IdTercero);
//     return $Consulta;
// }


?>