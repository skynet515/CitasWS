<?php
include('../../modelos/MEstado.php');
class CEstado{
    
    public function __construct(){
        $this->estado = new MEstado();
    }

    public function ListarEstados(){
        return $this->estado->ListarEstados();
    }
}