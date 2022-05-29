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

class Compra extends BaseDeDatos {

    //Crear el metodo constructor
    public function __construct() {
        parent::conectar();
    }

    public function save() {
        return $this->executeInsert("insert into ALUMNOS_DELIA set Nombre='{$_POST["Nombre"]}',Laboratorio1='{$_POST["Laboratorio1"]}',Laboratorio2='{$_POST["Laboratorio2"]}',Parcial='{$_POST["Parcial"]}'");
    }
}
//$insert="insert into ALUMNOS_DELIA set Nombre='{$_POST["Nombre"]}',Laboratorio1='{$_POST["Laboratorio1"]}',Laboratorio2='{$_POST["Laboratorio2"]}',Parcial='{$_POST["Parcial"]}'";
