<?php
include('../../Controladores/CUsuario.php');
$usuario = new CUsuario();
$method = $_SERVER["REQUEST_METHOD"];


if($method == "POST" &&
!empty($_GET["nombres"]) &&
!empty($_GET["telefono"]) &&
!empty($_GET["direccion"]) &&
!empty($_GET["correo"]) &&
!empty($_GET["clave"])){
    $nombres = $_GET["nombres"];
    $telefono = $_GET["telefono"];
    $direccion = $_GET["direccion"];
    $correo = $_GET["correo"];
    $clave = $_GET["clave"];

    $data = $usuario->InsertarUsuario($nombres, $telefono, $direccion, $correo, $clave);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
        print json_encode(false, JSON_FORCE_OBJECT);
    }

}


if ($method == "GET" && !empty($_GET["correo"]) && !empty($_GET["clave"])) {
    $correo = $_GET["correo"];
    $clave = $_GET["clave"];
	$data = $usuario-> ConsultarUsuario($correo, $clave);
	print json_encode($data, JSON_FORCE_OBJECT);
}


