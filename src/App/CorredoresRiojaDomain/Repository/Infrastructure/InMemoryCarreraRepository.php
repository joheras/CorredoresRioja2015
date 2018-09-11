<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Organizacion;
use App\CorredoresRiojaDomain\Model\Carrera;
use App\CorredoresRiojaDomain\Repository\ICarreraRepository;

class InMemoryCarreraRepository implements ICarreraRepository {

    private $carreras;

    public function __construct() {
        $org1 = new Organizacion("Ayuntamiento Matute", "El ayuntamiento de matute", "matute@gmail.com", "matute");
        $org2 = new Organizacion("Maraton Rioja", "El club maratón rioja", "mrioja@gmail.com", "mrioja");
        $this->carreras[] = new Carrera(1, "Carrera Montes Anguiano", "Primera carrera por los montes de Anguiano", new \DateTime("2015-06-15"), "10 km", new \DateTime("2015-06-14"), 50, "anguiano.jpg", $org2);
        $this->carreras[] = new Carrera(2, "Matutrail", "VI Matutrail", new \DateTime("2015-09-15"), "7 km", new \DateTime("2015-09-18"), 30, "matutrail.jpg", $org1);
    }

    public function actualizaCarrera(Carrera $carrera) {
        foreach ($this->carreras as $key => $value) {
            if ($value->getId() == $carrera->getId()) {
                $this->carreras[$key] = $carrera;
            }
        }
    }

    public function buscaCarreraBySlug($slug) {
        foreach ($this->carreras as $carrera) {
            if ($carrera->getSlug() == $slug) {
                return $carrera;
            }
        }
        return null;
    }

    public function buscaCarrerasDisputadas() {
        $carrerasdisputadas = [];
        foreach ($this->carreras as $carrera) {
            if ($carrera->getFechacelebracion()->format("Y-m-d") < (new \DateTime("now"))->format("Y-m-d")) {
                $carrerasdisputadas[] = $carrera;
            }
        }
        return $carrerasdisputadas;
    }

    public function buscaCarrerasPorDisputar() {
        $carreraspordisputar = [];
        foreach ($this->carreras as $carrera) {
            if ($carrera->getFechacelebracion()->format("Y-m-d") >= (new \DateTime("now"))->format("Y-m-d")) {
                $carreraspordisputar[] = $carrera;
            }
        }
        return $carreraspordisputar;
    }

    public function buscaTodasLasCarreras() {
        return $this->carreras;
    }

    public function creaCarrera(Carrera $carrera) {
        $this->carreras[] = $carrera;
    }

    public function eliminaCarrera(Carrera $carrera) {
        foreach ($this->carreras as $key => $value) {
            if ($value->getId() == $carrera->getId()) {
                unset($this->carreras[$key]);
            }
        }
    }

    public function buscaCarrerasDisputadasOrganizadasPor(Organizacion $organizacion) {
        $carrerasorganizadas = [];
        foreach ($this->carreras as $carrera) {
            if (Organizacion::compare($carrera->getOrganizador(), $organizacion)) {
                if ($carrera->getFechacelebracion()->format("Y-m-d") < (new \DateTime("now"))->format("Y-m-d")) {
                    $carrerasorganizadas[] = $carrera;
                }
            }
        }

        return $carrerasorganizadas;
    }

    public function buscaCarrerasPorDisputarOrganizadasPor(Organizacion $organizacion) {
        $carrerasorganizadas = [];
        foreach ($this->carreras as $carrera) {
            if (Organizacion::compare($carrera->getOrganizador(), $organizacion)) {
                if ($carrera->getFechacelebracion()->format("Y-m-d") >= (new \DateTime("now"))->format("Y-m-d")) {
                    $carrerasorganizadas[] = $carrera;
                }
            }
        }

        return $carrerasorganizadas;
    }

//put your code here
}
