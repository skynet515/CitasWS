<?php
include('../../Controladores/CCita.php');

$citas = new CCitas();
$method = $_SERVER["REQUEST_METHOD"];

if (
    $method == "POST" &&
    $_POST["fecha"] != "" &&
    $_POST["hora"] != "" &&
    $_POST["idcita"] != "" &&
    $_POST["idconsultorio"] != ""

) {


    $idconsultorio = $_POST["idconsultorio"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $idcita = $_POST["idcita"];

    $data = $citas->modificarCita($idconsultorio, $fecha, $hora, $idcita);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
        //   print $data;
        print json_encode(false, JSON_FORCE_OBJECT);
    }
}
