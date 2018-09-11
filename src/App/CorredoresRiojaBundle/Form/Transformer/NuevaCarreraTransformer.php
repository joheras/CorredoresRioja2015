<?php

namespace App\CorredoresRiojaBundle\Form\Transformer;
use Symfony\Component\Form\DataTransformerInterface;
use App\CorredoresRiojaBundle\Form\DTO\NuevaCarreraCommand;
use App\CorredoresRiojaDomain\Model\Carrera;


class NuevaCarreraTransformer implements DataTransformerInterface {
    
    private $organizacion;
    
    public function __construct($organizacion) {
        $this -> organizacion = $organizacion;;
    }

    public function reverseTransform($value) {

        $carrera = new Carrera(rand(0,10000),$value->getNombre(), $value->getDescripcion(), $value->getFechacelebracion(), 
                $value -> getDistancia(),
                $value->getFechalimiteinscripcion(), $value -> getNumeromaximoparticipantes(), $value->getImagen(),
                $this->organizacion);
        return $carrera;
    }

    public function transform($value) {
        if ($value === null) {
            return null;
        }
        $nuevaCarreraCommand = new NuevaCarreraCommand();
        $nuevaCarreraCommand->setNombre($value->getNombre());
        $nuevaCarreraCommand->setDescripcion($value->getDescripcion());
        $nuevaCarreraCommand->setFechacelebracion($value->getFechacelebracion());
        $nuevaCarreraCommand->setDistancia($value->getDistancia());
        $nuevaCarreraCommand->setFechalimiteinscripcion($value->getFechalimiteinscripcion());
        $nuevaCarreraCommand->setNumeromaximoparticipantes($value->getNumeromaximoparticipantes());
        $nuevaCarreraCommand->setImagen(null);
        return $nuevaCarreraCommand;
    }

}
