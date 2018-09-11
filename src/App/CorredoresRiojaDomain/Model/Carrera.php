<?php

namespace App\CorredoresRiojaDomain\Model;
use App\CorredoresRiojaDomain\Model\Organizacion;
use App\Util\Util;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Carrera {
    
    /** 
     * @ORM\Column(type="integer") 
     * @ORM\Id
     * **/
    private $id;
    /** @ORM\Column(type="string",length=100) **/
    private $nombre;
    /** @ORM\Column(type="text") **/
    private $descripcion;
    /** @ORM\Column(type="datetime") **/
    private $fechacelebracion;
    /** @ORM\Column(type="string",length=100) **/
    private $distancia;
    /** @ORM\Column(type="datetime") **/
    private $fechalimiteinscripcion;
    /** @ORM\Column(type="integer") **/
    private $numeromaximoparticipantes;
    /** @ORM\Column(type="string",length=255) **/
    private $imagen;
    /** @ORM\Column(type="string",length=100) **/
    private $slug;
    /** @ORM\ManyToOne(targetEntity="App\CorredoresRiojaDomain\Model\Organizacion") **/
    private $organizador;
    
    function setId($id) {
        $this->id = $id;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

            
    public function actualizaCampos($nombre, $descripcion, $fechacelebracion, $distancia, $fechalimiteinscripcion, $numeromaximoparticipantes, $imagen){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechacelebracion = $fechacelebracion;
        $this->distancia = $distancia;
        $this->fechalimiteinscripcion = $fechalimiteinscripcion;
        $this->numeromaximoparticipantes = $numeromaximoparticipantes;
        $this->imagen = $imagen;
        $this -> slug = Util::getSlug($nombre);
    }
    
    function __construct($id, $nombre, $descripcion, $fechacelebracion, $distancia, $fechalimiteinscripcion, $numeromaximoparticipantes, $imagen,
            Organizacion $organizador) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechacelebracion = $fechacelebracion;
        $this->distancia = $distancia;
        $this->fechalimiteinscripcion = $fechalimiteinscripcion;
        $this->numeromaximoparticipantes = $numeromaximoparticipantes;
        $this->imagen = $imagen;
        $this -> organizador = $organizador;
        $this -> slug = Util::getSlug($nombre);
    }
    
    function getId() {
        return $this->id;
    }

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

    function getOrganizador() {
        return $this->organizador;
    }

    function getSlug() {
        return $this->slug;
    }

    public function __toString() {
        return $this -> nombre;
    }


    public static function compare(Carrera $c1, Carrera $c2){
        
        return ($c1 ->getId() === $c2 ->getId());
        
    }

    public function subirFoto() {
        if(null===$this->imagen){
            return;
        }
        $directorioDestino = __DIR__.'/../../../../web/bundles/appcorredoresrioja/images';
        $nombreArchivoFoto = uniqid('foto') . '.jpg';
        $this -> imagen ->move($directorioDestino,$nombreArchivoFoto);
        $this-> imagen = $nombreArchivoFoto;
    }
    
    
    
}
