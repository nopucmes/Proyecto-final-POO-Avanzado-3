<?php
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
        return  " \n " . $info_vehicule . "      Numero de puertas " .$num_puertas .  "  Tiene airbag:". $airbag .    "  Tiene itv: ". $itv;
    }
};
?>