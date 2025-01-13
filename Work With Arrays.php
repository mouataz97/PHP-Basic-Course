<?php

require 'dumpFile.php';

// Work With Arrays
// array_chunk

$items = ['a' => 1, 'b' => 2, 'c' => 3];

prettyPrintArray(array_chunk($items, 2, true)); // back to dumpFile.php

// array_combine uses 2 arrays 1 as key and the other as value

$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];

prettyPrintArray(array_combine($keys, $values)); // the length of keys and values should be matched

// array_filter

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$even = array_filter($array, fn($number) => $number % 2 == 0); //fn callback function check if $number % 2 = 0
prettyPrintArray($even);
