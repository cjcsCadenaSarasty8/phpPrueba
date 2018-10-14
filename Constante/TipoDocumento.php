<?php

    $Cedula="CC";
    $Nit="NIT";
    $RegistroCivil="RC";
    $TarjetaIdentidad="TI";

    $Des_Cedula="Cedula";
    $Des_Nit="NIT";
    $Des_RegistroCivil="Registro Civil";
    $Des_TarjetaIdentidad="Tarjeta de Identidad";

    $ListaTipoDocumento=array($Cedula,$Nit,$RegistroCivil,$TarjetaIdentidad);
    $ListaTipoDocumentoDescripcion=array($Cedula=>$Des_Cedula,$Nit=>$Des_Nit,$RegistroCivil=>$Des_RegistroCivil,$TarjetaIdentidad=>$Des_TarjetaIdentidad);

    function ObtenerDescripcion($TipoDocumento){
        $Retorno="";
        switch($TipoDocumento){
            case $Cedula:
            echo $Cedula;
            $Retorno=$Des_Cedula;
            break;
            case $Nit:
            $Retorno=$Des_Nit;
            break;
            case $RegistroCivil:
            $Retorno=$Des_RegistroCivil;
            break;
            case $TarjetaIdentidad:
            $Retorno=$Des_TarjetaIdentidad;
            break;
            default:
            break;
        }
        return $Retorno;
    }

?>