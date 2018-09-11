<?php

namespace App\CorredoresRiojaBundle\Security\Voters;

use Symfony\Component\Security\Core\Authorization\Voter\AbstractVoter;

class OwnerVoter extends AbstractVoter {

   

    protected function getSupportedAttributes() {
        return array('edit');
    }

    protected function getSupportedClasses() {
        return array('App\CorredoresRiojaDomain\Model\Carrera');
    }

    protected function isGranted($attribute, $object, $user = null) {
        


        
        switch($attribute) {

            case 'edit':
                // this assumes that the data object has a getOwner() method
                // to get the entity of the user who owns this data object
                if ($user->getUsername() === $object->getOrganizador()->getEmail()) {
                    return true;
                }

                break;
        }

        return false;
        
        
    }

}
