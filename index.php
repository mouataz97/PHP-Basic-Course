<!Doctype html>
<html lang="en">
    <head>
        <title> Hello World </title>
    </head>
    <body>
    <h1><?= 'Hello World' # single line comment automatics print without proccessing ?></h1>
    <p><?php

        $x = 1;
        $y = &$x;
        $z = 2;
        $x =+ $z;
        echo 'the number is '. $y;
        /*
         * a multi line explains that in order to update $y value you must attach it with & sign
         * */

        ?></p>
    </body>
</html>