<?php
include('../../Controladores/CCita.php');

$citas = new CCitas();
$method = $_SERVER["REQUEST_METHOD"];

//Obtener el listado de citas pendientes:
if ($method == "GET") {

    $data = $citas->ListarCitasPendientes();
    print json_encode($data, JSON_FORCE_OBJECT);
}



if (
    $method == "POST" &&
    $_POST["idusuario"] != "" &&
    $_POST["fecha"] != "" &&
    $_POST["hora"] != "" &&
    $_POST["idconsultorio"] != ""

) {

    $idusuario = $_POST["idusuario"];
    $idconsultorio = $_POST["idconsultorio"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    $data = $citas->crearCita($idusuario, $idconsultorio, $fecha, $hora);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
        //   print $data;
        print json_encode(false, JSON_FORCE_OBJECT);
    }
}



