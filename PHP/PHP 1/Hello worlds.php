<?php
    echo "<h1>Hello world</h1>";

    #Constante
    define("Message", "Hello world!", false);
    echo "<h1>".Message."</h1>";
    
    #Variables
    $Message = "Learning PHP";
    echo "<h1>".$Message."</h1>";

    $Message1 = "Hello";
    $Message2 = "World";
    echo "<h1>".$Message1.$Message2."</h1>";

    $Array = ["Helo", "World"];

    echo "<h1>".$Array[0].$Array[1]."</h1>";