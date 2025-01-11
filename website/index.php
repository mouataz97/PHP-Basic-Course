<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty HTML</title>
</head>
<body>
<?php
$nav = include 'nav.php';

$nav = str_replace( 'about', 'About us', $nav);
$nav = str_replace( 'contact', 'Contact us', $nav);
$nav = str_replace( 'home', 'Home', $nav);

echo $nav;
?>


</body>
</html>