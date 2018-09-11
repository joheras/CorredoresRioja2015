<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Participante;
use App\CorredoresRiojaDomain\Repository\IParticipanteRepository;
use \Doctrine\ORM\EntityRepository;
use \Doctrine\ORM\EntityManager;

class DoctrineParticipanteRepository extends EntityRepository implements IParticipanteRepository {

    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function actualizaTiempoParticipante(Participante $participante, $tiempo) {
        $participante->actualizaTiempo($tiempo);
        $this->em->persist($participante);
        $this->em->flush();
    }

    public function buscaCarrerasDisputadasPorCorredor(\App\CorredoresRiojaDomain\Model\Corredor $corredor) {
        $dql = 'SELECT p FROM App\CorredoresRiojaDomain\Model\Participante p'
                . ' JOIN p.corredor c '
                . ' JOIN p.carrera ca'
                . ' WHERE c.dni = :dni '
                . ' AND ca.fechacelebracion <= :date';
        $consulta = $this->em->createQuery($dql);
        $consulta->setParameter('dni', $corredor->getDni());
        $consulta->setParameter('date', new \DateTime('now'));
        $participantes = $consulta->getResult();
        $carreras = [];
        foreach($participantes as $participante){
            $carreras[] = $participante -> getCarrera();
        }
        
        
        return $carreras;
    }

    public function buscaCarrerasPorDisputarDeCorredor(\App\CorredoresRiojaDomain\Model\Corredor $corredor) {
        $dql = 'SELECT p FROM App\CorredoresRiojaDomain\Model\Participante p'
                . ' JOIN p.corredor c '
                . ' JOIN p.carrera ca'
                . ' WHERE c.dni = :dni '
                . ' AND ca.fechacelebracion > :date';
        $consulta = $this->em->createQuery($dql);
        $consulta->setParameter('dni', $corredor->getDni());
        $consulta->setParameter('date', new \DateTime('now'));
        $participantes = $consulta->getResult();
        $carreras = [];
        foreach($participantes as $participante){
            $carreras[] = $participante -> getCarrera();
        }
        
        
        return $carreras;
    }

    public function buscaPartipantesDeCarrera(\App\CorredoresRiojaDomain\Model\Carrera $carrera) {
        $dql = 'SELECT p FROM App\CorredoresRiojaDomain\Model\Participante p'
                . ' JOIN p.carrera c '
                . ' WHERE c.id = :id ';
        $consulta = $this->em->createQuery($dql);
        $consulta->setParameter('id', $carrera->getId());
        
        return $consulta->getResult();
    }

    public function buscaTodasParticipaciones() {
        $dql = 'SELECT p FROM App\CorredoresRiojaDomain\Model\Participante p';
        $consulta = $this->em->createQuery($dql);
        return $consulta->getResult();
    }

    public function eliminaParticipante(\App\CorredoresRiojaDomain\Model\Corredor $corredor, \App\CorredoresRiojaDomain\Model\Carrera $carrera) {
        $dql = 'SELECT p FROM App\CorredoresRiojaDomain\Model\Participante p'
                . ' JOIN p.carrera c '
                . ' JOIN p.corredor co'
                . ' WHERE c.id = :id AND co.dni = :dni ';
        $consulta = $this->em->createQuery($dql);
        $consulta->setParameter('id', $carrera->getId());
        $consulta->setParameter('dni', $corredor->getDni());
        $participante = $consulta->getOneOrNullResult();
        if ($participante == null) {
            return;
        }
        $this->em->remove($participante);
        $this->em->flush();
    }

    public function inscribirParticipante(\App\CorredoresRiojaDomain\Model\Corredor $corredor, \App\CorredoresRiojaDomain\Model\Carrera $carrera) {

        $participante = new Participante($corredor, $carrera, rand(0, 1000), new \Datetime('now'));
        $this->em->persist($participante);
        $this->em->flush();
    }

    public function isCorredorInscrito(\App\CorredoresRiojaDomain\Model\Corredor $corredor, \App\CorredoresRiojaDomain\Model\Carrera $carrera) {
        $dql = 'SELECT p FROM App\CorredoresRiojaDomain\Model\Participante p'
                . ' JOIN p.carrera c '
                . ' WHERE c.id = :id ';
        $consulta = $this->em->createQuery($dql);
        $consulta->setParameter('id', $carrera->getId());
        $res = $consulta->getOneOrNullResult();
        if ($res == null) {
            return false;
        }
        return true;
    }

}
