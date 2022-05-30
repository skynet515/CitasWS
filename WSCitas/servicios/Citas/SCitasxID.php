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



