<?php

namespace App\CorredoresRiojaBundle\Form\DTO;
use Symfony\Component\Validator\Constraints as Assert;

class NuevaCarreraCommand {
    
    /**
     * @Assert\NotBlank()
     */
    private $nombre;
    /**
     * @Assert\NotBlank()
     */
    private $descripcion;
    /**
     * @Assert\Date()
     */
    private $fechacelebracion;
    /**
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"5km","10km","21km","42km"})
     */
    private $distancia;
    /**
     * @Assert\Date()
     */
    private $fechalimiteinscripcion;
    /**
     * @Assert\NotBlank()
     */
    private $numeromaximoparticipantes;
    /**
     * @Assert\Image()
     */
    private $imagen;
    
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFechacelebracion() {
        return $this->fechacelebracion;
    }

    function getDistancia() {
        return $this->distancia;
    }

    function getFechalimiteinscripcion() {
        return $this->fechalimiteinscripcion;
    }

    function getNumeromaximoparticipantes() {
        return $this->numeromaximoparticipantes;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFechacelebracion($fechacelebracion) {
        $this->fechacelebracion = $fechacelebracion;
    }

    function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    function setFechalimiteinscripcion($fechalimiteinscripcion) {
        $this->fechalimiteinscripcion = $fechalimiteinscripcion;
    }

    function setNumeromaximoparticipantes($numeromaximoparticipantes) {
        $this->numeromaximoparticipantes = $numeromaximoparticipantes;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }



    
    
}
