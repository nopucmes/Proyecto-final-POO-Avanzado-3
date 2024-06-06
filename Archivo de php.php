
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
        return " \n ".$this->fecha_fabricacion . " " .$this-> marca .$this-> modelo .$this-> consumo .$this-> tipo_de_motor;
    }
}

class Coche extends Vehiculo {
    private $num_puertas;
    private $airbag;
    private $itv;

    public function __construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor, $num_puertas, $airbag, $itv) {
        parent::__construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor);
        $this->num_puertas = $num_puertas;
        $this->airbag = $airbag;
        $this->itv = $itv;
    }

    public function getnum_puertas() {
        return $this->num_puertas;
    }

    public function getairbag() {
        return $this->airbag;
    }

    public function getitv() {
        return $this->itv;
    }

    public function setnum_puertas($num_puertas) {
        $this->num_puertas = $num_puertas;
    }

    public function setairbag($airbag) {
        $this->airbag = $airbag;
    }

    public function setitv($itv) {
        $this->itv = $itv;
    }
}

class Motocicleta extends Vehiculo {
    private $cilindrada;

    public function __construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor, $cilindrada) {
        parent::__construct($fecha_fabricacion, $marca, $modelo, $consumo, $tipo_de_motor);
        $this->cilindrada = $cilindrada;
    }

    public function getcilindrada() {
        return $this->cilindrada;
    }


}

$coche1 = new Coche("02/02/2022", "Ferrari", "F1", 20, "combustion", 0, "si", "si");
$motocicleta1 = new Motocicleta("03/02/2023", "BMW", "XS5", 5, "Eléctrico", 125);
$coche2 = new Coche ("03/02/2222","Opel","Astra", 40, "diesel",0,"si","si" );

echo $coche1;
echo $coche2;
echo $motocicleta1;
