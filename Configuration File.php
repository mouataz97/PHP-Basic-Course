<?php

// php ini & configuration
// error_reporting, error_log, display_errors

var_dump(ini_get('display_errors'));
var_dump(E_ALL);
ini_set('error_reporting' ,E_ALL & ~E_NOTICE);

$array = [1];
echo $array[2];
