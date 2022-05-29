<?php
include_once('../../conexion/conexion.php');
class MCita
{
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::getInstance();
    }

    public function ListarCitas(){
        $sql = 'CALL sp_ListaCitas';
        try{
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        }catch(PDOException $e){
            echo 'Error: ' . $e;
            return false;
        }
    }


    public function crearCita( $idusuario, $idconsultorio, $fecha, $hora){
        try{
            $sql = "CALL sp_InsertCitas(?,?,?,?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idusuario, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $idconsultorio, PDO::PARAM_INT);
            $PrepareStatement->bindValue(3, $fecha, PDO::PARAM_STR);
            $PrepareStatement->bindValue(4, $hora, PDO::PARAM_STR);
            return $PrepareStatement->execute();

        }catch(PDOException $e){
            return false;
        }
    }


    public function modificarCita( $idestado, $idconsultorio, $fecha, $hora, $idcita){
        try{
            $sql = "CALL sp_UpdateCitas(?,?,?,?,?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idestado, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $idconsultorio, PDO::PARAM_INT);
            $PrepareStatement->bindValue(3, $fecha, PDO::PARAM_STR);
            $PrepareStatement->bindValue(4, $hora, PDO::PARAM_STR);
            $PrepareStatement->bindValue(5, $idcita, PDO::PARAM_INT);
            return $PrepareStatement->execute();

        }catch(PDOException $e){
            return false;
        }
    }

}