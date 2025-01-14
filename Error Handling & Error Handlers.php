<?php

// Error Handling
// https://www.php.net/manual/en/errorfunc.constants.php

//trigger_error( 'This is an error', E_USER_ERROR);// if problem = fatal error
trigger_error('this is an error', E_USER_WARNING);//if problem = warrning error
//error_reporting(0); // no errors will be reported

echo 1;

