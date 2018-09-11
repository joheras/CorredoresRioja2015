<?php

namespace App\CorredoresRiojaBundle\Security;
use App\CorredoresRiojaBundle\Security\OrganizacionUser;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use App\CorredoresRiojaDomain\Repository\IOrganizacionRepository;

class OrganizacionUserProvider implements UserProviderInterface {
    
    private $organizadoresrepository;
    
    public function __construct(IOrganizacionRepository $repository) {
        // Inyectamos el repositorio
        $this -> organizadoresrepository = $repository;
    }
    
    
    public function loadUserByUsername($username) {
        // buscamos el usuario
        $userData = $this-> organizadoresrepository -> buscaOrganizacionPorEmail($username);
        // si existe el corredor, devolvemos un CorredorUser de lo contrario devolvemos una excepción
        if ($userData) {
            $password = $userData->getPassword();
            $salt = $userData -> getSalt();
            return new OrganizacionUser($username, $password, $salt);
        }

        throw new UsernameNotFoundException(
            sprintf('No existe una organización con el email "%s".', $username)
        );
        
        
    }

    public function refreshUser(UserInterface $user) {
        if (!$user instanceof OrganizacionUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        return $class === 'App\CorredoresRiojaBundle\Security\OrganizacionUser';
    }
    
}
