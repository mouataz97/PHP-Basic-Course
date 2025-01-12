<?php

global $y;
$x = 3;

function foo(){
    global $x;
    $GLOBALS['y'] = 10;
    echo $x. ' ';
}

foo($x);
echo $y;

function getFunction() {
    static $value = null;
    if($value === null) {
        $value = someFunction();
    }
}

function someFunction(){
    sleep(2);
    echo ' Processing ';
    return 10;
}

echo someFunction();