<?php

// Working with file system

$dir = scandir(__DIR__); //current PATH of the  file

var_dump($dir);
//mkdir('new_dir'); // to create a new directory
//mrdir('new_dir'); // to remove it

if(file_exists('file.txt')){
    echo filesize('file.txt');
    file_put_contents('file.txt', 'Hello World');
    clearstatcache();
}else{
    echo "file not found";
}

// Opning file
$file = @fopen('file.txt', 'r'); // r for ressource and @ is to avoid errors

// Reading file
while($line = fgets($file) != false){
    echo $line . '<br>';
}

