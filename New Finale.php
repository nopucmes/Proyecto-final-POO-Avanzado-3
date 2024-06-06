
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
    public function __toString() {
        $info_vehicule = parent::__toString();
        $num_puertas = $this ->num_puertas;
        $airbag = $this ->airbag;
        $itv=$this ->itv;
        return  " \n " . $info_vehicule . "      Numero de puertas: " .$num_puertas .  "  Tiene airbag:  ". $airbag .    "  Tiene itv: ". $itv;
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

    public function setcilindrada() {
        return $this->cilindrada;
    }
    public function __toString()
    {$info_vehicule = parent::__toString();
        $cilindrada=$this -> cilindrada;
        return " \n ". $info_vehicule."   Cilindrada :  "  .$cilindrada ;
    }


}

$coche1 = new Coche("02/02/2022", "Ferrari", "F1", 20, "combustion", 2, "si", "si");
$coche2 = new Coche ("03/02/2222","Opel","Astra", 40, "diesel",5,"si","si" );
$coche3= new Coche("03/04/1997","Citroën","C2",  0.5,"a pedales",3,"no","si" );
$motocicleta1 = new Motocicleta("03/02/2023", "BMW", "XS5", 5, "Eléctrico", 125);
$motocicleta2 = new Motocicleta("01/02/1980", "Vespino", "Solo hay uno", 0.1 , "Gasofa", 5 );
$motocicleta3 = new Motocicleta("04/04/2024", "Ducati", "950S", 8 , "A ella le gusta la gasolina", 500  );


//Si queremos uno por uno sacarlo por pantalla lo hacemos de sta manera:
echo $coche1;
echo $coche2;
echo $coche3;
echo $motocicleta1;
echo $motocicleta2;
echo $motocicleta3;


//Ahora lo que hacemos es crear un array :

$vehiculos = [
    $coche1, $coche2, $coche3, $motocicleta1, $motocicleta2, $motocicleta3
     
];

//Para poder sacar la información del array usamos "foreach" y de esta manera sacamos la información por pantalla:

foreach ($vehiculos as $vehiculo){
    echo $vehiculo;
}
 

 




