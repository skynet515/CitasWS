<?php
include('../../modelos/MRol.php');
class CRol{
    
    public function __construct(){
        $this->rol = new MRol();
    }

    public function ListarRoles(){
        return $this->rol->ListarRoles();
    }
}