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
$array = [1, 2, 3, 4, 5, 7, 8, 10];
$even = array_filter($array, fn($number) => $number % 2 == 0, ARRAY_FILTER_USE_BOTH); //fn callback function check if $number % 2 = 0

prettyPrintArray($even);
$keys = array_keys($array, 10);
prettyPrintArray($keys);

$array1 = ['a' => 1,'b' => 2,'c' => 3 ];
$array2 = ['a' => 4,'d' => 5,'c' => 6];
$array3 = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);
prettyPrintArray($array3);

// array_merge
echo 'test';
$merged = array_merge($array1, $array2); // use the bigger number if they have the same key
prettyPrintArray($merged);

// array_reduce
$innovice_items = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'item 1'],
    ['price' => 3.99, 'qty' => 2, 'desc' => 'item 2'],
    ['price' => 4,49, 'qty' => 5, 'desc' => 'item 3']
];

$total = array_reduce($innovice_items, fn($sum, $item) => $sum +  $item['price'] * $item['qty']);
echo $total;

// array_search
$array = ['a','b','c','d','e','ab','bc','cd','de'];
$search = array_search('ab', $array);
echo $search;

if(!in_array('ab', $array)){
    echo 'not found';
}else{
    echo 'found';
}

// array_diff array_diff_assoc
prettyPrintArray(array_diff($array1, $array2));
prettyPrintArray(array_diff_assoc($array1, $array2));

// array sort
$key_numbers = ['a' => 1, 'b' => 2, 'c' => 3, 4 => 6, 5 => 5];
asort($key_numbers);
prettyPrintArray($key_numbers);

// array distructor
