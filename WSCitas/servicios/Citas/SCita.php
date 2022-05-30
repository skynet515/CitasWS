<?php
include('../../Controladores/CCita.php');

$citas = new CCitas();
$method = $_SERVER["REQUEST_METHOD"];


//Obtener el listado de citas por usuario
if ($method == "GET"&&
!empty($_GET["idusuario"])) {
    $idusuario = $_GET["idusuario"];
	$data = $citas->ListarCitas($idusuario);
	print json_encode($data, JSON_FORCE_OBJECT);
}

//Obtener el detalle de las cita
if ($method == "GET"&&
!empty($_GET["idcita"])) {
    $idcita = $_GET["idcita"];
	$data = $citas->citaxID($idcita);
	print json_encode($data, JSON_FORCE_OBJECT);
}

//Obtener el listado de citas pendientes:
if ($method == "GET") {
    
	$data = $citas->ListarCitasPendientes();
	print json_encode($data, JSON_FORCE_OBJECT);
}

if($method == "POST" &&
!empty($_GET["idusuario"]) &&
!empty($_GET["fecha"]) &&
!empty($_GET["hora"]) &&
!empty($_GET["idconsultorio"])

){

    $idusuario = $_GET["idusuario"];
    $idconsultorio = $_GET["idconsultorio"];
    $fecha = $_GET["fecha"];
    $hora = $_GET["hora"];

    $data = $citas->crearCita($idusuario, $idconsultorio, $fecha, $hora);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
     //   print $data;
        print json_encode(false, JSON_FORCE_OBJECT);
    }

}



if($method == "PUT" &&
!empty($_GET["idestado"]) &&
!empty($_GET["fecha"]) &&
!empty($_GET["hora"]) &&
!empty($_GET["idcita"]) &&
!empty($_GET["idconsultorio"])

){

    $idestado = $_GET["idestado"];
    $idconsultorio = $_GET["idconsultorio"];
    $fecha = $_GET["fecha"];
    $hora = $_GET["hora"];
    $idcita = $_GET["idcita"];

    $data = $citas->modificarCita($idestado, $idconsultorio, $fecha, $hora,$idcita );
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
     //   print $data;
        print json_encode(false, JSON_FORCE_OBJECT);
    }

}