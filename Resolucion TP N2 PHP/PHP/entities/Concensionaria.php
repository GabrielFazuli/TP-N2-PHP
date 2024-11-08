<?php
class Concesionaria {
    private $vehiculos = [];

    public function cargarVehiculos(): void {
        $this->vehiculos[] = new Auto("Peugeot", "206", 200000.00, 4);
        $this->vehiculos[] = new Moto("Honda", "Titan", 60000.00, 125);
        $this->vehiculos[] = new Auto("Peugeot", "208", 250000.00, 5);
        $this->vehiculos[] = new Moto("Yamaha", "YBR", 80500.50, 160);
    }

    public function mostrarVehiculos(): void {
        foreach ($this->vehiculos as $vehiculo) {
            echo $vehiculo->toString() . "\n";
        }

        echo "=============================\n";

        $vehiculoCaro = $this->obtenerVehiculoMasCaro();
        echo "Vehículo más caro: {$vehiculoCaro->getMarca()} {$vehiculoCaro->getModelo()}\n";

        $vehiculoBarato = $this->obtenerVehiculoMasBarato();
        echo "Vehículo más barato: {$vehiculoBarato->getMarca()} {$vehiculoBarato->getModelo()}\n";

        $vehiculoConY = $this->obtenerVehiculoConLetraY();
        if ($vehiculoConY) {
            echo "Vehículo que contiene en el modelo la letra ‘Y’: {$vehiculoConY->getMarca()} {$vehiculoConY->getModelo()} {$vehiculoConY->getPrecio()}\n";
        } else {
            echo "No hay vehículos con la letra 'Y' en el modelo.\n";
        }

        echo "=============================\n";

        // Vehículos ordenados por precio
        echo "Vehículos ordenados por precio de mayor a menor:\n";
        usort($this->vehiculos, function($a, $b) {
            return $b->getPrecio() - $a->getPrecio();
        });
        foreach ($this->vehiculos as $vehiculo) {
            echo "{$vehiculo->getMarca()} {$vehiculo->getModelo()}\n";
        }

        echo "=============================\n";

        echo "Vehículos ordenados por orden natural (marca, modelo, precio):\n";
        usort($this->vehiculos, function($a, $b) {
            return strcmp($a->getMarca(), $b->getMarca()) ?: strcmp($a->getModelo(), $b->getModelo()) ?: ($a->getPrecio() - $b->getPrecio());
        });
        foreach ($this->vehiculos as $vehiculo) {
            echo $vehiculo->toString() . "\n";
        }
    }

    private function obtenerVehiculoMasCaro(): Vehiculo {
        usort($this->vehiculos, function($a, $b) {
            return $b->getPrecio() - $a->getPrecio();
        });
        return $this->vehiculos[0];
    }

    private function obtenerVehiculoMasBarato(): Vehiculo {
        usort($this->vehiculos, function($a, $b) {
            return $a->getPrecio() - $b->getPrecio(); 
        });
        return $this->vehiculos[0]; 
    }

    private function obtenerVehiculoConLetraY(): ?Vehiculo {
        foreach ($this->vehiculos as $vehiculo) {
            if (strpos($vehiculo->getModelo(), 'Y') !== false) {
                return $vehiculo;
            }
        }
        return null;
    }
}
?>