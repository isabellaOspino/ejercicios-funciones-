<?php

function  calcualarSuma($numero){

    $numero = abs($numero);

        $digitosNuemero_str = str_split(string)$numero;

        $suma = 0;

        for ($i = 0;
        $i< strlen($digitosNuemero_str);
        $i++){
            $digitos =$digitosNuemero_str[$i];

            $suma +=(int)$digitos;

        }
return $suma;
}

$solucion = calcularSumaDigitos (83756);

echo $solucion;