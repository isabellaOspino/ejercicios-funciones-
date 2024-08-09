<?php



function esPalindromo($palabra){

    $palabra = (strtolower(preg_replace "/\",".,",$palabra));

    $invertida = strrev ($palabra);

    return $palabra == $invertida;
}

$texto = "luz azul";

if (esPalindromo ($texto){
 
echo " true " "es un palindromo ";

}else{

echo " false" ;
}

<?




