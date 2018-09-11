<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Corredor;
use App\CorredoresRiojaDomain\Repository\ICorredorRepository;
use \Doctrine\ORM\EntityRepository;
use \Doctrine\ORM\EntityManager;

class DoctrineCorredorRepository extends EntityRepository implements ICorredorRepository {

    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function actualizaCorredor(Corredor $corredor) {
        $this -> em->persist($corredor);
        $this -> em ->flush();
    }

    public function buscaCorredor($dni) {
         $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Corredor c WHERE c.dni = :dni';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('dni', $dni);
        return $consulta->getResult()[0];
    }

    public function buscaTodosLosCorredores() {
        $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Corredor c';
        $consulta = $this->em->createQuery($dql);
        return $consulta->getResult();
    }

    public function eliminaCorredor(Corredor $corredor) {
        $this -> em->remove($corredor);
        $this -> em ->flush();
    }

    public function registraCorredor(Corredor $corredor) {
        $this -> em->persist($corredor);
        $this -> em ->flush();
    }

}
