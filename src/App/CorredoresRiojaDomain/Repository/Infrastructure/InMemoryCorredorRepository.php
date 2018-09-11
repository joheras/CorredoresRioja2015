<?php

namespace App\CorredoresRiojaDomain\Repository\Infrastructure;

use App\CorredoresRiojaDomain\Model\Corredor;
use App\CorredoresRiojaDomain\Repository\ICorredorRepository;

class InMemoryCorredorRepository implements ICorredorRepository {

    private $corredores;

    function __construct() {
        $this->corredores[] = new Corredor(16613711, 'Jonathan', 'Heras Vicente', 'joheras@gmail.com', '$2a$12$pgOouPm3E8mcAYT9WraLluceSUmbJFuPogELZZHPM36eBYX.iR20q', 'Calle Falsa', new \DateTime("1985-08-15"));
        $this->corredores[] = new Corredor(11111111, 'Eloy', 'Mata', 'eloy.mata@unirioja.es', '$2a$12$pgOouPm3E8mcAYT9WraLluceSUmbJFuPogELZZHPM36eBYX.iR20q', 'Ed Vives', new \DateTime("1970-06-07"));
        $this->corredores[] = new Corredor(22222222, 'Pepe', 'Perez', 'pepe.perez@gmail.com', '$2a$12$pgOouPm3E8mcAYT9WraLluceSUmbJFuPogELZZHPM36eBYX.iR20q', 'Luis de Ulloa', new \DateTime("1980-02-23"));
    }

    public function actualizaCorredor(Corredor $corredor) {

        foreach ($this->corredores as $key => $value) {
            if ($value->getDni() == $corredor->getDni()) {
                $this->corredores[$key] = $corredor;
            }
        }
    }

    public function buscaCorredor($dni) {
        foreach ($this->corredores as $corredor) {
            if ($corredor->getDni() == $dni) {
                return $corredor;
            }
        }
        return null;
    }

    public function buscaTodosLosCorredores() {
        return $this->corredores;
    }

    public function eliminaCorredor(Corredor $corredor) {
        foreach ($this->corredores as $key => $value) {
            if ($value->getDni() == $corredor->getDni()) {
                unset($this->corredores[$key]);
            }
        }
    }

    public function registraCorredor(Corredor $corredor) {
        $this -> corredores[] = $corredor;
    }


}
