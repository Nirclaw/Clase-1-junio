<?php
// array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
// array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
// array_key_exists(): Comprueba si una clave existe en un array.
// in_array(): Comprueba si un valor existe en un array.
// array_rand(): Devuelve una o varias claves aleatorias de un array.
// array_unique(): Elimina los valores duplicados de un array.
// array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
// array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
// array_push(): Agrega uno o más elementos al final de un array.
// array_pop(): Extrae y elimina el último elemento de un array.
// array_reverse(): Revierte el orden de los elementos en un array.
// array_sum(): Devuelve la suma de todos los valores de un array numérico.
// array_product(): Devuelve el producto de todos los valores de un array numérico.
// array_chunk(): Divide un array en fragmentos más pequeños.
// array_keys(): Devuelve todas las claves de un array.
// array_values(): Devuelve todos los valores de un array.
// array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.  


/**
 * * Array_flip() => Transforma los valores en las Key y las key se convierte en los valores
 */

$ejemploFlip = array('nombre' => 'Nicolas', 'edad' => 23);

var_dump(array_flip($ejemploFlip));



/**
 * *array_fill()=> Crea un array con una variable, el primer argumento de es desde que numero desea iniciar , el sgundo argumento indica la cantidad y el tercer argumento es para indicar con que lo va llenar 
 */

$ejemploFill = 'perro';
print_r(array_fill(0, 10, $ejemploFill));

/**
 * * array_filter() => Se utiliza para devolver los datos de un array en especifico.
 */

function impar($numero)
{
    return $numero & 1;
}
function mayor($numero)
{
    return $numero > 10;
}

function menor($numero)
{
    return $numero < 10;
}

function par($numero)
{
    return !($numero & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

print_r($array1);
print_r(array_filter($array1, "par"));
print_r(array_filter($array2, "mayor"));
print_r(array_filter($array2, "menor"));

/**
 * *array_map() => 
 */
function doble($n)
{
    return ($n * $n);
}


$a = array(1, 2, 3, 4, 5);

print_r(array_map("doble",$a));