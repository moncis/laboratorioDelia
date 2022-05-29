<?php
include "vendor/autoload.php";

$url="http://virtual.unicaes.edu.sv/labdelia/wslab.php?wsdl";
$cliente=new nusoap_client($url,'wsdl');
$err=$cliente->getError();
if ($err) {
    echo "Error de conexion con webservice: $err";
    exit(0);
}

$parametros=array('username'=>$_POST["username"],'password'=>$_POST["password"]);
$result=$cliente->call('login',$parametros);
echo $cliente->getError();
if ($result["level"]>0){
    echo "Id usuario:{$result["id_user"]}<br>";
    echo "Nombre:{$result["fullname"]}<br>";
    echo "Mail:{$result["email"]}<br>";
    echo "Mensaje:{$result["msg"]}<br>";
}else {
    echo "Mensaje:{$result["msg"]}<br>";
}