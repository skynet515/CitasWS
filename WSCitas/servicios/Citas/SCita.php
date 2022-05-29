<?php
include('../../Controladores/CCita.php');

$citas = new CCitas();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

	$data = $citas->ListarCitas();
	print json_encode($data, JSON_PRETTY_PRINT);
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
        print json_encode(true, JSON_PRETTY_PRINT);
    } else {
     //   print $data;
        print json_encode(false, JSON_PRETTY_PRINT);
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
        print json_encode(true, JSON_PRETTY_PRINT);
    } else {
     //   print $data;
        print json_encode(false, JSON_PRETTY_PRINT);
    }

}