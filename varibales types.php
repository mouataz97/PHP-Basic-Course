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

    echo $completed . '<br>';
    echo $greet . '<br>';
    echo $price . '<br>';
    echo $score . '<br>';

    echo gettype($completed) . '<br>'; // @gettype get the type of the variable
    var_dump($completed) . '<br>'; //@var_dumb stops the code and print the variable and it value

# 4 Compound Types
    # array
    $list = [1, 2, 3, a, b, c, -14, true];
    print_r($list); // @print_r to pring an array
    # object
    # callable
    # iterable

# 2 Special Types
    # ressources
    # null