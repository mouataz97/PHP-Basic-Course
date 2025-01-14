<?php

// php ini & configuration
// error_reporting, error_log, display_errors

// var_dump(ini_get('display_errors'));
//ini_set('error_reporting' ,E_ALL & ~E_NOTICE);
var_dump(ini_get('display_errors'));
ini_set('display_errors' ,0);

$array = [1];
echo $array[2];
