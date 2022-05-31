<?php
include('../../modelos/MCita.php');
class CCitas{
    
    public function __construct(){
        $this->cita = new MCita();
    }

    public function ListarCitas($idusuario){
        return $this->cita->ListarCitas($idusuario);
    }

    public function citaxID($idcita){
        return $this->cita->citaxID($idcita);
    }

    public function ListarCitasPendientes(){
        return $this->cita->ListarCitasPendientes();
    }

    public function crearCita( $idusuario, $idconsultorio, $fecha, $hora){
        
        return $this->cita->crearCita($idusuario, $idconsultorio, $fecha, $hora);

    }

    public function modificarCita($idconsultorio, $fecha, $hora, $idcita){
        return $this->cita->modificarCita($idconsultorio, $fecha, $hora, $idcita);
    }
}