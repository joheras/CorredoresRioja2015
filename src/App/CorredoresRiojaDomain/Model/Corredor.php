<?php

namespace App\CorredoresRiojaDomain\Model;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Corredor {
    
    /** 
     * @ORM\Column(type="string",length=100) 
     * @ORM\Id
     * **/
    private $dni;
    /** @ORM\Column(type="string",length=100) **/
    private $nombre;
    /** @ORM\Column(type="string",length=100) **/
    private $apellidos;
    /** @ORM\Column(type="string",length=100) **/
    private $email;
    /** @ORM\Column(type="string",length=100) **/
    private $password;
    /** @ORM\Column(type="text") **/
    private $direccion;
    /** @ORM\Column(type="datetime") **/
    private $fechanacimiento;
    /** @ORM\Column(type="string",length=100) **/
    private $salt;
    
   
    
    function __construct($dni, $nombre, $apellidos, $email, $password, $direccion, $fechanacimiento) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->direccion = $direccion;
        $this->fechanacimiento = $fechanacimiento;
        $this -> salt = md5(time());
    }

    function getDni() {
        return $this->dni;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getFechanacimiento() {
        return $this->fechanacimiento;
    }   
    
    function getSalt() {
        return $this->salt;
    }

    public function saveEncodedPassword($encoded){
        $this -> password = $encoded;
    }
    
    
    
    public function __toString() {
        return $this -> nombre;
    }

    
    
        
    /**
     * @Assert\IsTrue(message = "La contraseña no puede ser la misma que tu nombre")
     */
    public function isPasswordLegal(){
       return $this -> nombre != $this -> password;
    }
    
    /**
     * @Assert\IsTrue(message = "Tienes que ser mayor de edad para registrarte")
     */
    public function isMayorEdad(){
        $currentyear = getdate()['year'];
        $birthdayyear = ($this -> fechanacimiento->format('Y')); 
        $diff_years  = ($currentyear - $birthdayyear);
       return $diff_years >= 18;
    }
    
    public static function compare(Corredor $c1, Corredor $c2){
        return $c1 ->getDni() === $c2 ->getDni();    
    }
    
    
}
