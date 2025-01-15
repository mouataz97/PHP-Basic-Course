<?php

// Error Handling
// https://www.php.net/manual/en/errorfunc.constants.php

//trigger_error( 'This is an error', E_USER_ERROR);// if problem = fatal error
trigger_error('this is an error', E_USER_WARNING);//if problem = warrning error
//error_reporting(0); // no errors will be reported

echo 1;

function errorHandler(int $type, string $message, ?string $file = null,?int $line = null)
{
    echo 'Error: ' . $message . ' in ' . $file . ' on line ' . $line;
    Exit ;
}

error_reporting(E_ALL & ~E_NOTICE);
set_error_handler('errorHandler', E_ALL); //customising error level

echo $x;