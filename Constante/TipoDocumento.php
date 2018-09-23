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

    function ObtenerDescripcion($TipoDocumento){
        $Retorno="";
        switch($TipoDocumento){
            case $Cedula:
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
        }
        return $Retorno;
    }

?>