<?php

class Vehiculo {
    private $fecha_fabricacion;
    private $marca;
    private $modelo;
    private $consumo;
    private $tipo_de_motor;

    public function __construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor) {
        $this->fecha_fabricacion = $fecha_fabricacion;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tipo_de_motor = $tipo_de_motor;
    }

    public function getfecha_fabricacion() {
        return $this->fecha_fabricacion;
    }

    public function getmarca() {
        return $this->marca;
    }

    public function getmodelo() {
        return $this->modelo;
    }

    public function getconsumo() {
        return $this->consumo;
    }

    public function gettipo_de_motor() {
        return $this->tipo_de_motor;
    }

    public function setfecha_fabricacion($fecha_fabricacion) {
        $this->fecha_fabricacion = $fecha_fabricacion;
    }

    public function setmarca($marca) {
        $this->marca = $marca;
    }

    public function setmodelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setconsumo($consumo) {
        $this->consumo = $consumo;
    }

    public function settipo_de_motor($tipo_de_motor) {
        $this->tipo_de_motor = $tipo_de_motor;
    }

    public function __toString()
    {
        return " \n "."Fecha de fabricación:  ".$this->fecha_fabricacion . "   Marca de vehículo   "   . $this-> marca .  "     Modelo:  " . $this-> modelo . "  Consumo   "   .$this-> consumo .   "   Tipo de motor: "    .$this-> tipo_de_motor;
    }
};
?>