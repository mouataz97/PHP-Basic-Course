<?php

/*
 * Return
 * Declare
 * Goto
 */

function sum($a, $b) {
    return $a + $b;
}

echo $b = sum(1, 2);

echo '<br>';

// Declare Ticks

function onTick(){
    echo 'Men hna <br>';
}

register_tick_function('onTick');

declare(ticks = 3);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br>';
}

declare(strict_types = 1);

do{
    echo $i++ . '<br>';
}while($i < $length);



