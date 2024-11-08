<?php
abstract class Vehiculo implements VehiculoInterface {
    protected $marca;
    protected $modelo;
    protected $precio;

    public function __construct(string $marca, string $modelo, float $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    abstract public function toString(): string;
}
?>
