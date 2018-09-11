<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Carrera;
use App\CorredoresRiojaDomain\Repository\ICarreraRepository;
use \Doctrine\ORM\EntityRepository;
use \Doctrine\ORM\EntityManager;

class DoctrineCarreraRepository extends EntityRepository implements ICarreraRepository {

    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function actualizaCarrera(Carrera $carrera) {
        $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c WHERE c.id = :id';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('id', $carrera ->getId());
        $car= $consulta->getOneOrNullResult();
        
        $car-> actualizaCampos($carrera ->getNombre(), $carrera -> getDescripcion(), 
                $carrera ->getFechacelebracion(), $carrera ->getDistancia(), $carrera ->getFechalimiteinscripcion(),
                $carrera ->getNumeromaximoparticipantes(), $carrera ->getImagen());
        
        $this->em->persist($car);
        $this->em->flush();
    }

    public function buscaCarreraBySlug($slug) {
         $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c WHERE c.slug = :slug';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('slug', $slug);
        return $consulta->getOneOrNullResult();
    }

    public function buscaCarrerasDisputadas() {
        $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c'
                . ' WHERE c.fechacelebracion <= :date';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('date',  new \DateTime('now'));
        return $consulta->getResult();
    }

    public function buscaCarrerasDisputadasOrganizadasPor(\App\CorredoresRiojaDomain\Model\Organizacion $organizacion) {
         $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c'
                . ' JOIN c.organizador o '
                . ' WHERE o.id = :id '
                . ' AND c.fechacelebracion <= :date';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('id', $organizacion->getId());
        $consulta ->setParameter('date',  new \DateTime('now'));
        return $consulta->getResult();
    }

    public function buscaCarrerasPorDisputar() {
        $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c'
                . ' WHERE c.fechacelebracion > :date';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('date',  new \DateTime('now'));
        return $consulta->getResult();
    }

    public function buscaCarrerasPorDisputarOrganizadasPor(\App\CorredoresRiojaDomain\Model\Organizacion $organizacion) {
        $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c'
                . ' JOIN c.organizador o '
                . ' WHERE o.id = :id '
                . ' AND c.fechacelebracion > :date';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('id', $organizacion->getId());
        $consulta ->setParameter('date',  new \DateTime('now'));
        return $consulta->getResult();
    }

    public function buscaTodasLasCarreras() {
        $dql = 'SELECT c FROM App\CorredoresRiojaDomain\Model\Carrera c';
        $consulta = $this->em->createQuery($dql);
        return $consulta->getResult();
    }

    public function creaCarrera(Carrera $carrera) {
        $this->em->persist($carrera);
        $this->em->flush();
    }

    public function eliminaCarrera(Carrera $carrera) {
        $this -> em->remove($carrera);
        $this -> em ->flush();
    }

}
