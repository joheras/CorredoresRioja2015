<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Participante;
use App\CorredoresRiojaDomain\Model\Carrera;
use App\CorredoresRiojaDomain\Model\Organizacion;
use App\CorredoresRiojaDomain\Model\Corredor;
use App\CorredoresRiojaDomain\Repository\IParticipanteRepository;


class InMemoryParticipanteRepository implements IParticipanteRepository {
    
    private $participantes;
    
    public function __construct(){
        $org1 = new Organizacion("Ayuntamiento Matute", "El ayuntamiento de matute", "matute@gmail.com", "matute");
        $org2 = new Organizacion("Maraton Rioja", "El club maratón rioja", "mrioja@gmail.com", "mrioja");
        $carrera1 = new Carrera(1, "Carrera Montes Anguiano", "Primera carrera por los montes de Anguiano", 
                    new \DateTime("2015-06-15"), "10 km", new \DateTime("2015-06-14"), 50, "anguiano.jpg", $org2);
        $carrera2 = new Carrera(2, "Matutrail", "VI Matutrail", 
                    new \DateTime("2015-09-15"), "7 km", new \DateTime("2015-09-18"), 30, "matutrail.jpg", $org1);
        $corredor1 = new Corredor(00000000, 'Jonathan', 'Heras', 'joheras@gmail.com', '1234', 'Calle Falsa', new \DateTime("1985-08-15"));
        $corredor2 = new Corredor(11111111, 'Eloy', 'Mata', 'eloy.mata@unirioja.es', '1234', 'Ed Vives', new \DateTime("1970-06-07"));
        $corredor3 = new Corredor(22222222, 'Pepe', 'Perez', 'pepe.perez@gmail.com', '1234', 'Luis de Ulloa', new \DateTime("1980-02-23"));
        
        $this -> participantes[] = new Participante($corredor3, $carrera1, 1, new \DateTime("01:10:45"));
        $this -> participantes[] = new Participante($corredor3, $carrera2, 1, "");
        $this -> participantes[] = new Participante($corredor2, $carrera1, 1, new \DateTime("01:15:20"));
        $this -> participantes[] = new Participante($corredor2, $carrera2, 1, "");
        $this -> participantes[] = new Participante($corredor1, $carrera1, 1, new \DateTime("01:30:15"));
        $this -> participantes[] = new Participante($corredor1, $carrera2, 1, "");
        
    }
    
    
    public function actualizaTiempoParticipante(Participante $participante, $tiempo) {
        
    }

    public function buscaCarrerasDisputadasPorCorredor(Corredor $corredor) {
        $carreras = [];
        foreach($this -> participantes as $participante){
            if(Corredor::compare($participante->getCorredor(), $corredor)){
                $carrera = $participante->getCarrera();
                if ($carrera->getFechacelebracion()->format("Y-m-d") < (new \DateTime("now"))->format("Y-m-d")) {
                    $carreras[] = $carrera ;
                }
            }         
        }
        
        return $carreras;
        
        
    }

    public function buscaCarrerasPorDisputarDeCorredor(Corredor $corredor) {
        $carreras = [];
        foreach($this -> participantes as $participante){
            if(Corredor::compare($participante->getCorredor(), $corredor)){
                $carrera = $participante->getCarrera();
                if ($carrera->getFechacelebracion()->format("Y-m-d") >= (new \DateTime("now"))->format("Y-m-d")) {
                    $carreras[] = $carrera ;
                }
            }         
        }
        
        return $carreras;
        
    }

    public function buscaPartipantesDeCarrera(Carrera $carrera) {
        $inscritos = [];
        foreach($this->participantes as $participante){
            if(Carrera::compare($participante ->getCarrera(),$carrera)){
                $inscritos[] = $participante;
            }
        }
        return $inscritos;
    }

    public function buscaTodasParticipaciones() {
        
    }

    public function eliminaParticipante(Corredor $corredor, Carrera $carrera) {
        foreach ($this->participantes as $key => $value) {
            if (Carrera::compare($value ->getCarrera(),$carrera) &&
                Corredor::compare($value ->getCorredor(),$corredor)) {
                unset($this->participantes[$key]);
            }
        }
        
        
    }

    public function inscribirParticipante(Corredor $corredor, Carrera $carrera) {
        $this -> participantes[] = new Participante($corredor, $carrera, 2, "");
    }

    public function isCorredorInscrito(Corredor $corredor, Carrera $carrera) {
       
        foreach($this->participantes as $participante){
            if(Carrera::compare($participante ->getCarrera(),$carrera) &&
               Corredor::compare($participante ->getCorredor(),$corredor)){
                return true;
            }
        }
        return false;
    }

}
