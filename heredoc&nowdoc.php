<?php

# Strings
$x = 1;
$y = 2;

#Heredoc
$Text = <<<TEXT
hello world
TEXT;

var_dump($Text);

echo nl2br($Text);

#Nowdoc
$Text = <<<'TEXT'
Line 1
Line 2
Line 3 ' "
TEXT;

echo '<br>';
echo nl2br($Text);