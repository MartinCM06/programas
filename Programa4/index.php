<?php

function esPalindromo($cadena) {
    
    $cadena = strtolower(str_replace(' ', '', $cadena));

 
    $cadenaInvertida = strrev($cadena);

 
    if ($cadena === $cadenaInvertida) {
        return true;
    } else {
        return false;
    }
}


$frase = "Anita lava la tina";

if (esPalindromo($frase)) {
    echo '"' . $frase . '" es un palíndromo.';
} else {
    echo '"' . $frase . '" no es un palíndromo.';
}
?>