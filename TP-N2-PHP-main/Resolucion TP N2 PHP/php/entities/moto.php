<?php

class Moto extends Vehiculo {
    private $cilindrada;

    public function __construct($marca, $modelo, $precio, $cilindrada) {
        parent::__construct($marca, $modelo, $precio);
        $this->cilindrada = $cilindrada;
    }

    public function detalles() {
        return $this->toString() . "Cilindrada: $this->cilindrada\n";
    }
}
?>
