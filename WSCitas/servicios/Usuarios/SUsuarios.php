<?php
include('../../Controladores/CUsuario.php');
$usuario = new CUsuario();
$method = $_SERVER["REQUEST_METHOD"];


if (
    $method == "POST" &&
    $_POST["nombres"] != "" &&
    $_POST["telefono"] != "" &&
    $_POST["direccion"] != "" &&
    $_POST["correo"] != "" &&
    $_POST["clave"] != ""

) {
    $nombres = $_POST["nombres"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    $data = true; //$usuario->InsertarUsuario($nombres, $telefono, $direccion, $correo, $clave);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
        print json_encode(false, JSON_FORCE_OBJECT);
    }
}


if ($method == "GET" && !empty($_GET["correo"]) && !empty($_GET["clave"])) {
    $correo = $_GET["correo"];
    $clave = $_GET["clave"];
    $data = $usuario->ConsultarUsuario($correo, $clave);
    print json_encode($data, JSON_FORCE_OBJECT);
}
