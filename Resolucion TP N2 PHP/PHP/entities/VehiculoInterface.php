<?php
interface VehiculoInterface {
    public function getMarca(): string;
    public function getModelo(): string;
    public function getPrecio(): float;
    public function toString(): string;
}
?>