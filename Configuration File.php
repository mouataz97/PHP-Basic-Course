<?php

// php ini & configuration
// error_reporting, error_log, display_errors
/*
// var_dump(ini_get('display_errors'));
//ini_set('error_reporting' ,E_ALL & ~E_NOTICE);
var_dump(ini_get('display_errors'));
ini_set('display_errors' ,0);

$array = [1];
echo $array[2];
*/
var_dump(ini_get('display_errors'));
ini_set('max_execution_time' , 3);

sleep(5);
echo 'Hello World';

//var_dump(ini_get('memory_limit'));