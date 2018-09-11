<?php
namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Organizacion;
use App\CorredoresRiojaDomain\Repository\IOrganizacionRepository;

class InMemoryOrganizacionRepository implements IOrganizacionRepository {
    
    private $organizaciones;

    function __construct() {
        $this->organizaciones[] = new Organizacion("Ayuntamiento Matute", "El ayuntamiento de matute", "matute@gmail.com", "matute");
        $this->organizaciones[] = new Organizacion("Maraton Rioja", "El club maratón rioja", "mrioja@gmail.com", "mrioja");
    }
    
    public function actualizaOrganizacion(Organizacion $organizacion) {
         foreach ($this->organizaciones as $key => $value) {
            if ($value->getEmail() == $organizacion->getEmail()) {
                $this->organizaciones[$key] = $organizacion;
            }
        }
    }
    
    public function buscaOrganizacionPorEmail($email) {
     foreach ($this->organizaciones as $organizacion) {
            if ($organizacion->getEmail() == $email) {
                return $organizacion;
            }
        }
        return null;   
    }

    public function buscaOrganizacionPorSlug($slug) {
     foreach ($this->organizaciones as $organizacion) {
            if ($organizacion->getSlug() == $slug) {
                return $organizacion;
            }
        }
        return null;   
    }

    public function buscaTodasLasOrganizaciones() {
        return $this -> organizaciones;
    }

    public function eliminaOrganizacion(Organizacion $organizacion) {
        foreach ($this->organizaciones as $key => $value) {
            if ($value->getId() == $organizacion->getDni()) {
                unset($this->organizaciones[$key]);
            }
        }
    }

    public function registraOrganizacion(Organizacion $organizacion) {
        $this -> organizaciones[] = $organizacion;
    }
    
    

//put your code here
}
