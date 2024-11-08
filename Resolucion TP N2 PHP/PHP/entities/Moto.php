<?php
class Moto extends Vehiculo {
    private $cilindrada;

    public function __construct(string $marca, string $modelo, float $precio, int $cilindrada) {
        parent::__construct($marca, $modelo, $precio);
        $this->cilindrada = $cilindrada;
    }

    public function toString(): string {
        return "Marca: {$this->marca} // Modelo: {$this->modelo} // Cilindrada: {$this->cilindrada}c // Precio: \$" . number_format($this->precio, 2, ',', '.');
    }
}
?>