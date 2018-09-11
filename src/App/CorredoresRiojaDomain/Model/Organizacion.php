<?php

namespace App\CorredoresRiojaDomain\Model;
use App\Util\Util;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Organizacion {
    
    /** 
     * @ORM\Column(type="integer") 
     * @ORM\Id
     * **/
    private $id;
    /** @ORM\Column(type="string",length=100) **/
    private $nombre;
    /** @ORM\Column(type="text") **/
    private $descripcion;
    /** @ORM\Column(type="string",length=100) **/
    private $email;
    /** @ORM\Column(type="string",length=100) **/
    private $password;
    /** @ORM\Column(type="string",length=100) **/
    private $slug;
    /** @ORM\Column(type="string",length=100) **/
    private $salt;
    
    function __construct($nombre, $descripcion, $email, $password) {
        $this->id = rand(0,100000);
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->email = $email;
        $this->password = $password;
        $this ->slug = Util::getSlug($nombre);
        $this -> salt = md5(time());
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

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getSlug() {
        return $this->slug;
    }


    public function __toString() {
        return $this -> nombre . ". " . $this ->descripcion;
    }


    public static function compare(Organizacion $o1, Organizacion $o2){
        return $o1 ->getEmail() === $o2 ->getEmail();        
    }
    
    
      public function saveEncodedPassword($encoded){
        $this -> password = $encoded;
    }
    
    function getSalt() {
        return $this->salt;
    }


    
}
