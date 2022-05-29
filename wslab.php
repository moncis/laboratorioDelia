<?php
include "vendor/autoload.php";
$server=new nusoap_server;
$server->configureWSDL('server','urn:server');
$server->wsdl->schemaTargetNamespace='urn:server';

$server->wsdl->addComplexType(
    'registroalumno',
    'complexType',
    'struct',
    'all',
    '',
    array('Idalu'=>array('name'=>'Idalu','type'=>'xsd:int'),
            'Nombre'=>array('name'=>'Nombre','type'=>'xsd:string'),
            'Laboratorio1'=>array('name'=>'Laboratorio1','type'=>'xsd:float'),
            'Laboratorio2'=>array('name'=>'Laboratorio2','type'=>'xsd:float'),
            'Parcial'=>array('name'=>'Parcial','type'=>'xsd:float')
    )
);

$server->register(
    'alumno',
    array('Idalu'=>'xsd:int','Nombre'=>'xsd:string','Laboratorio1'=>'xsd:float','Laboratorio2'=>'xsd:float','Parcial'=>'xsd:float',),
    array('return'=>'tns:registroalumno'),
    'urn:server',
    'urn:server#registroServer',
    'rpc',
    'encoded',
    'Funcion para promedio de notas de un alumno'
);

function alumno(){
    
    $valor=array(
        'Idalu'=>1,
        'Nombre'=>'Juan Lopez',
        'Laboratorio1'=>7.9,
        'Laboratorio2'=>5.5,
        'Parcial'=>9
        );
    return $valor;
}

$server->service(file_get_contents("php://input"));