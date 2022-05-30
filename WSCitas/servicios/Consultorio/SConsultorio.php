<?php
include('../../Controladores/CConsultorio.php');

$consultorio = new CConsultorio();
$method = $_SERVER["REQUEST_METHOD"];

//Obtener el detalle de las cita
if ($method == "GET") {

	$data = $consultorio->listarConsultorio();
	print json_encode($data, JSON_FORCE_OBJECT);
}



