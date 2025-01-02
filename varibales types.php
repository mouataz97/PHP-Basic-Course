<?php

/*D ata types & Type Casting */

# 4 Scalar Types

    # bool - True / False
    $completed = true;
    # int IN
    $score = 75;
    # float IR with vergules
    $price = 8.99;
    # string - "Mouataz", "Hello "
    $greet = 'Hello Mouataz';

    // php checks the conditions of the variables and specific there type

    echo $completed . '<br>';
    echo $greet . '<br>';
    echo $price . '<br>';
    echo $score . '<br>';

    echo gettype($completed) . '<br>'; // @gettype get the type of the variable
    var_dump($completed) . '<br>'; //@var_dumb stops the code and print the variable and it value

# 4 Compound Types
    # array
    $list = [1, 2, 3, 'a', 'b', 'c', -14, true];
    print_r($list); // @print_r to pring an array
    # object
    function sum($a, $b){
        return $a + $b;
    }
    var_dump(sum(12,23));
    # callable
    $number = (int) 5; //@(string) when you put () it cast a value to the recommended by putting it inside
    # iterable

# 2 Special Types
    # resources
    # null

