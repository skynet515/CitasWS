
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