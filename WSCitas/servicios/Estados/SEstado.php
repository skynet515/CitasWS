<?php
include('../../Controladores/CEstado.php');
$estados = new CEstado();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

	$data = $estados->ListarEstados();
	print json_encode($data, JSON_FORCE_OBJECT);
}