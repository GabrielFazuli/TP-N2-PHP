<?php

class Auto extends Vehiculo {
    private $puertas;

    public function __construct($marca, $modelo, $precio, $puertas) {
        parent::__construct($marca, $modelo, $precio);
        $this->puertas = $puertas;
    }

    public function detalles() {
        return $this->toString() . "Puertas: $this->puertas\n";
    }
}
?>

