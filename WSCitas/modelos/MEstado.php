<?php
include_once('../../conexion/conexion.php');
class MEstado
{
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::getInstance();
    }

    public function ListarEstados(){
        $sql = 'CALL sp_ListarEstados';
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