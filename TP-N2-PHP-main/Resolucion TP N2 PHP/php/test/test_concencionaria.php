<?php

ini_set('display_errors', 1); 

require_once '../entities/auto.php';              
require_once '../entities/concesionaria.php';               
require_once '../entities/moto.php';     
require_once '../entities/vehiculo.php';   
require_once '../entities/vehiculoInterface.php';  
 


$concesionaria = new Concesionaria();


$concesionaria->cargarVehiculos();


$concesionaria->mostrarVehiculos();

?>
