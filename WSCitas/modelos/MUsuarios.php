<?php
include_once('../../conexion/conexion.php');

class MUsuario{
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::getInstance();
    }


    public function InsertarUsuario($nombres, $telefono, $direccion, $correo, $clave){
        try{

            $sql = "CALL sp_InsertarUsuario(?,?,?,?,?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $nombres, PDO::PARAM_STR);
            $PrepareStatement->bindValue(2, $telefono, PDO::PARAM_STR);
            $PrepareStatement->bindValue(3, $direccion, PDO::PARAM_STR);
            $PrepareStatement->bindValue(4, $correo, PDO::PARAM_STR);
            $PrepareStatement->bindValue(5, $clave, PDO::PARAM_STR);
            return $PrepareStatement->execute();

        }catch(PDOException $e){
            return false;
        }

    }
}