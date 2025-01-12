<?php

// Anonymous, Callable, Closure & Arrow Functions

function sum(callable $callback, int|float ...$numbers): int|float{
    return $callback(array_sum($numbers));
}

// call back function

echo sum(function($element){
    return $element * 2;
},12,23,-5);

$array1 = [1, 2, 3];
$array2 = array_map(function($element){
    return $element * 2;
}, $array1);

echo '<pre>';
print_r($array2);
print_r($array1);
echo '</pre>';