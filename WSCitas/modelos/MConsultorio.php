<?php
include_once('../../conexion/conexion.php');
class MConsultorio
{
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::getInstance();
    }

    public function listarConsultorio(){
        $sql = 'CALL sp_ListarConsultorio';
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