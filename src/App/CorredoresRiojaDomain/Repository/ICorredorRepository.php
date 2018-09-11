<?php

namespace App\CorredoresRiojaDomain\Repository;
use App\CorredoresRiojaDomain\Model\Corredor;


interface ICorredorRepository {
    
    public function registraCorredor(Corredor $corredor);
    public function actualizaCorredor(Corredor $corredor);
    public function eliminaCorredor(Corredor $corredor);
    public function buscaCorredor($dni);
    public function buscaTodosLosCorredores();
    
}
