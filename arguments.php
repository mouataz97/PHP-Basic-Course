<?php

/* function */

// checks if the function arg and call not matching disallow it
declare(strict_types=1);
function foo($x, int|float $y = 10)
{
    return $x + $y;
}

echo foo(x:0.1,y: (float) '2');

function maths(...$numbers): int
{
    //return array_sum($numbers);
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
}
echo maths(1, 2, 3, 4, 5);

setcookie(name:'name', value: 'value', httponly: true);

$arr = ['x' =>1,  'y'=>2, 5, 6, 7];
echo foo(...$arr);