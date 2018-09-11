<?php

namespace App\CorredoresRiojaBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

class CorredorUser implements UserInterface, EquatableInterface {
    
    private $username;
    private $name;
    private $password;
    private $salt;
    private $roles;

    public function __construct($username, $password, $salt, $name) {
        $this->username = $username;
        $this->password = $password;
        $this->salt =  $salt;
        $this -> name = $name;
        $this->roles = array('ROLE_CORREDOR');
    }
    
    public function eraseCredentials() {
        
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getSalt() {
                  return $this -> salt;
    }
    
    function getName() {
        return $this->name;
    }

    
    function getRoles() {
        return array('ROLE_CORREDOR');
    }

    
    public function isEqualTo(UserInterface $user) {
     
        if(!$user instanceof CorredorUser ||
            $this->password !== $user->getPassword() ||
            $this->salt !== $user->getSalt() ||
            $this->username !== $user->getUsername()){
                return false;
        }
        
        return true;
        
    }

}
