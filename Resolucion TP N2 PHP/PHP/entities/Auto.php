<?php
class Auto extends Vehiculo {
    private $puertas;

    public function __construct(string $marca, string $modelo, float $precio, int $puertas) {
        parent::__construct($marca, $modelo, $precio);
        $this->puertas = $puertas;
    }

    public function toString(): string {
        return "Marca: {$this->marca} // Modelo: {$this->modelo} // Puertas: {$this->puertas} // Precio: \$" . number_format($this->precio, 2, ',', '.');
    }
}
?>