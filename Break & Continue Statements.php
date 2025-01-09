<?php

$i = 1;

# loops

/** @var integer $i */
$text = "hello world";
for($i = 0; print $i, $i <= strlen($text); $i++){
    echo $text[$i];
}
echo "<br>";

$text = ['a', 'b', 'c', 'd', 'e', 'f' ];
for($i = 0; $i <= count($text); $i++){
    echo $text[$i];
}
echo "<br>";
# while

while ($i < 10) {
    echo " ". $i;
    $i++;
}
echo "<br>";

# do while

do{
    echo " ".$i;
    $i++;
}while($i <= 10);
echo "<br>";

# foreach

foreach (range(1, 10) as $i) {
    echo " ". $i;
}
echo "<br>";

$programminglanguagess = ['php', 'java', 'c#', 'javascript', 'python'];
foreach ($programminglanguagess as $lang => &$language) {
    echo $lang . " " . $language;
}

print_r($programminglanguagess);