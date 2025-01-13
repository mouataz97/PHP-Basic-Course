<?php

// Dates & Time

$currenTime = time();

echo $currenTime . '<br>'; // now time by seconds
echo $currenTime + 5 * 24 * 60 * 60 . '<br>'; // now time + 5 days
echo $currenTime - 60 * 60 * 24 . '<br>'; //now time minus 1 day by seconds

echo date('m/d/y g:i a') . '<br>'; // month/day/year hour/minutes by am pm

function add5Days(): void
{
    global $currenTime;
    echo date('m/d/y g:i a', $currenTime + 5 * 24 * 60 * 60) . '<br>';
}

echo add5Days();

echo 'UTC' . '<br>';
echo date_default_timezone_set('UTC'); // making time zone by UTC by default
echo date('m/d/y g:i a') . '<br>'; // declaration by utc


$date = date('m/d/y g:ia', strtotime('first day of june 2021')) . '<br>';

print_r(date_parse($date));

