<?php

class Concesionaria {
    private $vehiculos = [];


    public function cargarVehiculos() {
        $this->vehiculos[] = new Auto("Peugeot", "206", 200000, 4);
        $this->vehiculos[] = new Moto("Honda", "Titan", 60000, 125);
        $this->vehiculos[] = new Auto("Peugeot", "208", 250000, 5);
        $this->vehiculos[] = new Moto("Yamaha", "YBR", 80500.50, 160);
    }


    public function mostrarVehiculos() {
        foreach ($this->vehiculos as $vehiculo) {
            echo $vehiculo->detalles();
        }

        echo "=============================\n";

        $this->vehiculoMasCaro();
        $this->vehiculoMasBarato();

        $this->vehiculoConLetraY();

        $this->ordenarPorPrecio();

        $this->ordenarPorOrdenNatural();
    }

    private function vehiculoMasCaro() {
        usort($this->vehiculos, fn($a, $b) => $b->getPrecio() - $a->getPrecio());
        echo "Vehículo más caro: " . $this->vehiculos[0]->getMarca() . " " . $this->vehiculos[0]->getModelo() . "\n";
    }

    private function vehiculoMasBarato() {
        usort($this->vehiculos, fn($a, $b) => $a->getPrecio() - $b->getPrecio());
        echo "Vehículo más barato: " . $this->vehiculos[0]->getMarca() . " " . $this->vehiculos[0]->getModelo() . "\n";
    }

    private function vehiculoConLetraY() {
        foreach ($this->vehiculos as $vehiculo) {
            if (strpos($vehiculo->getModelo(), 'Y') !== false) {
                echo "Vehículo que contiene en el modelo la letra ‘Y’: " . $vehiculo->getMarca() . " " . $vehiculo->getModelo() . " $" . number_format($vehiculo->getPrecio(), 2, ',', '.') . "\n";
                break;
            }
        }
    }

    private function ordenarPorPrecio() {
        usort($this->vehiculos, fn($a, $b) => $b->getPrecio() - $a->getPrecio());
        echo "Vehículos ordenados por precio de mayor a menor:\n";
        foreach ($this->vehiculos as $vehiculo) {
            echo $vehiculo->getMarca() . " " . $vehiculo->getModelo() . "\n";
        }
    }

    private function ordenarPorOrdenNatural() {
        usort($this->vehiculos, fn($a, $b) => strcmp($a->getMarca(), $b->getMarca()) ?: strcmp($a->getModelo(), $b->getModelo()) ?: $a->getPrecio() - $b->getPrecio());
        echo "Vehículos ordenados por orden natural (marca, modelo, precio):\n";
        foreach ($this->vehiculos as $vehiculo) {
            echo $vehiculo->detalles();
        }
    }
}
?>
