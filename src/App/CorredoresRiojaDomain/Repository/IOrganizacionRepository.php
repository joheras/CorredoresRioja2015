<?php

namespace App\CorredoresRiojaDomain\Repository;
use App\CorredoresRiojaDomain\Model\Organizacion;


interface IOrganizacionRepository {
    
    public function registraOrganizacion(Organizacion $organizacion);
    public function actualizaOrganizacion(Organizacion $organizacion);
    public function eliminaOrganizacion(Organizacion $organizacion);
    public function buscaOrganizacionPorSlug($slug);
    public function buscaOrganizacionPorEmail($email);
    public function buscaTodasLasOrganizaciones();
    
}
