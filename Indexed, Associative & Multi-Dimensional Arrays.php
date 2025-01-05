<?php

// ARRAYS
$programminglanguage1 = ["php","java","python"];

$name = "mouataz";

echo $programminglanguage1[1];

echo '<pre>';
    print_r($programminglanguage1); // print array
echo '</pre>';

echo count($programminglanguage1); // to count array length

echo '<br>';

array_push($programminglanguage1,'C#','C');

echo '<br>';

$programminglanguage1 = [
    'php' => '8.0',
    'python' => '3.9',
    'go' => '1.15'
];

print_r($programminglanguage1); // print array

$programminglanguages = [   // multi dimensional array
    'php' => '8.0',
    'python' => [
        'creator' => 'guido',
        'extension' => '.py',
        'website' => 'www.python.org',
        'opensource' => True,
        [
            'version' => '3.9', 'releasedDate' => '10-5-2020'
        ],
        [
            'version' => '3.8', 'releasedDate' => '10-14-2019'
        ],
    ],
    'go' => '1.15'
];

echo $programminglanguages['python'][0]['releasedDate'];
