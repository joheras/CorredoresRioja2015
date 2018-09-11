<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Organizacion;
use App\CorredoresRiojaDomain\Repository\IOrganizacionRepository;
use \Doctrine\ORM\EntityRepository;
use \Doctrine\ORM\EntityManager;


class DoctrineOrganizacionRepository extends EntityRepository implements  IOrganizacionRepository {
   private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function actualizaOrganizacion(Organizacion $organizacion) {
         $this->em->persist($organizacion);
        $this->em->flush();
    }

    public function buscaOrganizacionPorEmail($email) {
         $dql = 'SELECT o FROM App\CorredoresRiojaDomain\Model\Organizacion o WHERE o.email = :email';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('email', $email);
        return $consulta->getOneOrNullResult();
    }

    public function buscaOrganizacionPorSlug($slug) {
         $dql = 'SELECT o FROM App\CorredoresRiojaDomain\Model\Organizacion o WHERE o.slug = :slug';
        $consulta = $this->em->createQuery($dql);
        $consulta ->setParameter('slug', $slug);
        return $consulta->getOneOrNullResult();
    }

    public function buscaTodasLasOrganizaciones() {
        $dql = 'SELECT o FROM App\CorredoresRiojaDomain\Model\Organizacion o';
        $consulta = $this->em->createQuery($dql);
        return $consulta->getResult();
    }

    public function eliminaOrganizacion(Organizacion $organizacion) {
         $this -> em->remove($organizacion);
        $this -> em ->flush();
    }

    public function registraOrganizacion(Organizacion $organizacion) {
        $this->em->persist($organizacion);
        $this->em->flush();
    }

}
