<?php
include('../../Controladores/CRol.php');

$roles = new CRol();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

	$data = $roles->ListarRoles();
	print json_encode($data, JSON_FORCE_OBJECT);
}