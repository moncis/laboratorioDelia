<?php
include "vendor/autoload.php";
include_once "conexion.php";
include_once "resultado.php";

$url="http://virtual.unicaes.edu.sv/labdelia/wslab.php?wsdl";
$cliente=new nusoap_client($url,'wsdl');
$err=$cliente->getError();
if ($err) {
    echo "Error de conexion con webservice: $err";
    exit(0);
}

$sql_insert = "insert into ALUMNOS_DELIA values ($nombre,$lab1,$lab2,$parcial)";
