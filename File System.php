<?php

// Working with file system

$dir = scandir(__DIR__); //current PATH of the  file

var_dump($dir);
//mkdir('new_dir'); // to create a new directory
//mrdir('new_dir'); // to remove it

if(file_exists('file.txt')){
    echo filesize('file.txt');
}else{
    echo "file not found";
}