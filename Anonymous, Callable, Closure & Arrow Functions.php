<?php

// Anonymous, Callable, Closure & Arrow Functions

function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
}

echo sum(12,23,-5);

// call back function

$array1 = [1, 2, 3];
$array2 = array_map(function($element){
    return $element * 2;
}, $array1);

echo '<pre>';
print_r($array2);
print_r($array1);
echo '</pre>';