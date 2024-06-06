<?php

 $coche1 = new Coche("02/02/2022", "Ferrari", "F1", 20, "combustion", 2, "si", "si");
 $coche2 = new Coche ("03/02/2222","Opel","Astra", 40, "diesel",5,"si","si" );
 $coche3= new Coche("03/04/1997","Citroën","C2",  0.5,"a pedales",3,"no","si" );
 $motocicleta1 = new Motocicleta("03/02/2023", "BMW", "XS5", 5, "Eléctrico", 125);
 $motocicleta2 = new Motocicleta("01/02/1980", "Vespino", "Solo hay uno", 0.1 , "Gasofa", 5 );
 $motocicleta3 = new Motocicleta("04/04/2024", "Ducati", "950S", 8 , "Gasolina", 500  );

 //Si queremos uno por uno sacarlo por pantalla lo hacemos de esta manera:

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

//Para poder usar la información del array empleamos "foreach" y de esta manera sacamos la información por pantalla:

foreach ($vehiculos as $vehiculo){
    echo $vehiculo;
};
 

?>