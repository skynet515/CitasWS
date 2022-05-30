<?php
include('../../modelos/MConsultorio.php');
class CConsultorio{
    
    public function __construct(){
        $this->consultorio = new MConsultorio();
    }

    public function listarConsultorio(){
        return $this->consultorio->listarConsultorio();
    }
}