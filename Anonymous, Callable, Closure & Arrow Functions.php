<?php

// Anonymous, Callable, Closure & Arrow Functions

function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
}