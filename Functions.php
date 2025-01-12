<?php

// function

echo foo();
echo bar();

function foo(): void {
    echo "Hello World <br>";
    function bar(){
        echo "bar";
    }
}

function aVariable(): mixed {
    return 1.8;
}

var_dump(aVariable());