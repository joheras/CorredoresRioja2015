<?php

namespace App\CorredoresRiojaDomain\Repository;
use App\CorredoresRiojaDomain\Model\Carrera;
use App\CorredoresRiojaDomain\Model\Corredor;
use App\CorredoresRiojaDomain\Model\Participante;

interface IParticipanteRepository {
    public function inscribirParticipante(Corredor $corredor,Carrera $carrera);
    public function buscaTodasParticipaciones();
    public function buscaPartipantesDeCarrera(Carrera $carrera);
    public function buscaCarrerasDisputadasPorCorredor(Corredor $corredor);
    public function buscaCarrerasPorDisputarDeCorredor(Corredor $corredor);
    public function actualizaTiempoParticipante(Participante $participante,$tiempo);
    public function eliminaParticipante(Corredor $corredor,Carrera $carrera);
    public function isCorredorInscrito(Corredor $corredor,Carrera $carrera);
}
