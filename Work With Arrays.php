<?php

require 'dumpFile.php';

// Work With Arrays
// array_chunk

$items = ['a' => 1, 'b' => 2, 'c' => 3];

prettyPrintArray(array_chunk($items, 2)); // back to dumpFile.php