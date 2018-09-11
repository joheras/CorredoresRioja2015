<?php

namespace App\CorredoresRiojaDomain\Repository;
use App\CorredoresRiojaDomain\Model\Carrera;
use App\CorredoresRiojaDomain\Model\Organizacion;

interface ICarreraRepository {
    
    public function buscaCarreraBySlug($slug);
    public function buscaCarrerasDisputadas();
    public function buscaCarrerasPorDisputar();
    public function buscaCarrerasDisputadasOrganizadasPor(Organizacion $organizacion);
    public function buscaCarrerasPorDisputarOrganizadasPor(Organizacion $organizacion);
    public function buscaTodasLasCarreras();
    public function creaCarrera(Carrera $carrera);
    public function actualizaCarrera(Carrera $carrera);
    public function eliminaCarrera(Carrera $carrera);
}
