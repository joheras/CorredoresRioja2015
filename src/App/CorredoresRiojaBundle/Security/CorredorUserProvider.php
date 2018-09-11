<?php

namespace App\CorredoresRiojaBundle\Security;
use App\CorredoresRiojaBundle\Security\CorredorUser;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use App\CorredoresRiojaDomain\Repository\ICorredorRepository;

class CorredorUserProvider implements UserProviderInterface {
    
    private $corredoresrepository;
    
    public function __construct(ICorredorRepository $repository) {
        // Inyectamos el repositorio
        $this -> corredoresrepository = $repository;
    }
    
    
    public function loadUserByUsername($username) {
        // buscamos el usuario
        $userData = $this-> corredoresrepository -> buscaCorredor($username);
        // si existe el corredor, devolvemos un CorredorUser de lo contrario devolvemos una excepción
        if ($userData) {
            $password = $userData->getPassword();
            $salt = $userData -> getSalt();
            $name = $userData -> getNombre();
            return new CorredorUser($username, $password, $salt,$name);
        }

        throw new UsernameNotFoundException(
            sprintf('No existe un usuario con DNI "%s".', $username)
        );
        
        
    }

    public function refreshUser(UserInterface $user) {
        if (!$user instanceof CorredorUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        return $class === 'App\CorredoresRiojaBundle\Security\CorredorUser';
    }
    
}
