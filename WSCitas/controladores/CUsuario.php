<?php
include('../../modelos/MUsuarios.php');

class CUsuario{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new MUsuario();
    }

    public function InsertarUsuario($nombres, $telefono, $direccion, $correo, $clave){
        return $this->usuario->InsertarUsuario($nombres, $telefono, $direccion, $correo, $clave);
    }
}