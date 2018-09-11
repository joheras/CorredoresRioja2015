<?php

namespace App\CorredoresRiojaBundle\Form\Transformer;
use Symfony\Component\Form\DataTransformerInterface;
use App\CorredoresRiojaBundle\Form\DTO\RegistroOrganizacionCommand;
use App\CorredoresRiojaDomain\Model\Organizacion;


class RegistroOrganizacionTransformer implements DataTransformerInterface {

    public function reverseTransform($value) {

        $organizacion = new Organizacion($value->getNombre(), $value->getDescripcion(), $value -> getEmail(),
                $value->getPassword());
        return $organizacion;
    }

    public function transform($value) {
        if ($value === null) {
            return null;
        }
        $registroOrganizacionCommand = new RegistroOrganizacionCommand();
        $registroOrganizacionCommand->setEmail($value->getEmail());
        $registroOrganizacionCommand->setNombre($value->getNombre());
        $registroOrganizacionCommand->setDescripcion($value->getDescripcion());
        $registroOrganizacionCommand->setPassword($value->getPassword());
        return $registroOrganizacionCommand;
    }

}
