<?php
include('../../modelos/MCita.php');
class CCitas{
    
    public function __construct(){
        $this->cita = new MCita();
    }

    public function ListarCitas($idusuario){
        return $this->cita->ListarCitas($idusuario);
    }

    public function ListarCitasPendientes(){
        return $this->cita->ListarCitasPendientes();
    }

    public function crearCita( $idusuario, $idconsultorio, $fecha, $hora){
        
        return $this->cita->crearCita($idusuario, $idconsultorio, $fecha, $hora);

    }

    public function modificarCita( $idestado, $idconsultorio, $fecha, $hora, $idcita){
        return $this->cita->modificarCita($idestado, $idconsultorio, $fecha, $hora, $idcita);
    }
}