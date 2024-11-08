<?php

require_once '../entities/VehiculoInterface.php';
require_once '../entities/Vehiculo.php';         
require_once '../entities/Auto.php';             
require_once '../entities/Moto.php';             
require_once '../entities/Concesionaria.php';     

$concesionaria = new Concesionaria();

$concesionaria->cargarVehiculos();

$concesionaria->mostrarVehiculos();
?>
    