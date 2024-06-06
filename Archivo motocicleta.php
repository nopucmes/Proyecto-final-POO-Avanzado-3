<?php
class Motocicleta extends Vehiculo {
    private $cilindrada;

    public function __construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor, $cilindrada) {
        parent::__construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor);
        $this->cilindrada = $cilindrada;
    }

    public function getcilindrada() {
        return $this->cilindrada;
    }

    public function setcilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }
    
    public function __toString()
    {$info_vehicule = parent::__toString();
        $cilindrada=$this -> cilindrada;
        return " \n ". $info_vehicule."   Cilindrada :  "  .$cilindrada ;
    }
};
?>