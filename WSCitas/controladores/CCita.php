<?php
include('../../modelos/MCita.php');
class CCitas{
    
    public function __construct(){
        $this->cita = new MCita();
    }

    public function ListarCitas(){
        return $this->cita->ListarCitas();
    }

    public function crearCita( $idusuario, $idconsultorio, $fecha, $hora){
        
        return $this->cita->crearCita($idusuario, $idconsultorio, $fecha, $hora);

    }

    public function modificarCita( $idestado, $idconsultorio, $fecha, $hora, $idcita){
        return $this->cita->modificarCita($idestado, $idconsultorio, $fecha, $hora, $idcita);
    }
}