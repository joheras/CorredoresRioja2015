<?php

namespace App\CorredoresRiojaDomain\Model;
use App\CorredoresRiojaDomain\Model\Carrera;
use App\CorredoresRiojaDomain\Model\Corredor;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


class Participante {
    /** 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\CorredoresRiojaDomain\Model\Corredor") 
     * @ORM\JoinColumn(name="corredor_dni", referencedColumnName="dni")
     * **/
    private $corredor;
    /** 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\CorredoresRiojaDomain\Model\Carrera") 
     * **/
    private $carrera;
    /** 
     * @ORM\Column(type="integer") 
     * **/
    private $dorsal;
    /** 
     * @ORM\Column(type="time") 
     * **/
    private $tiempo;
    
    function __construct(Corredor $corredor, Carrera $carrera, $dorsal, $tiempo) {
        $this->corredor = $corredor;
        $this->carrera = $carrera;
        $this->dorsal = $dorsal;
        $this->tiempo = $tiempo;
    }
    
    function getCorredor() {
        return $this->corredor;
    }

    function getCarrera() {
        return $this->carrera;
    }

    function getDorsal() {
        return $this->dorsal;
    }

    function getTiempo() {
        return $this->tiempo;
    }
    
    public function actualizaTiempo($tiempo){
        $this -> tiempo = $tiempo;
    }
    
}
