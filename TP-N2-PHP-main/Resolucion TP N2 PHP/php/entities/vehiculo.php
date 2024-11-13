<?php


abstract class Vehiculo implements VehiculoInterface {
    protected $marca;
    protected $modelo;
    protected $precio;

    public function __construct($marca, $modelo, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }


    public function getMarca() {
        return $this->marca;
    }


    public function getModelo() {
        return $this->modelo;
    }


    public function getPrecio() {
        return $this->precio;
    }

    public function toString(): string {
        return "Marca: $this->marca // Modelo: $this->modelo // Precio: $" . number_format($this->precio, 2, ',', '.') . "\n";
    }

    abstract public function detalles();
}
?>

