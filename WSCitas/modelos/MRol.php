<?php
include_once('../../conexion/conexion.php');
class MRol
{
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::getInstance();
    }

    public function ListarRoles(){
        $sql = 'CALL sp_ListarRoles';
        try{
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        }catch(PDOException $e){
            echo 'Error: ' . $e;
            return false;
        }
    }

}