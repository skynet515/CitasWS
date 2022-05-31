<?php
include('../../Controladores/CCita.php');

$citas = new CCitas();
$method = $_SERVER["REQUEST_METHOD"];

//Obtener el detalle de las cita
if ($method == "GET"&&
!empty($_GET["idcita"])) {
    $idcita = $_GET["idcita"];
	$data = $citas->citaxID($idcita);
	print json_encode($data, JSON_FORCE_OBJECT);
}


//CAMBIAR ESTADO DE CITA
if($method == "POST" &&
!empty($_POST["idcita"]))
{

    $idcita = $_POST["idcita"];

    $data = $citas->cambiarEstadoCita($idcita);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
     //   print $data;
        print json_encode(false, JSON_FORCE_OBJECT);
    }


}

