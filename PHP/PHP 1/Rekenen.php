<?php
    $Getal1 = mt_rand(1, 100);
    $Getal2 = mt_rand(1, 100);

    echo "<h2>".$Getal1." + ".$Getal2." = ".$Getal1 + $Getal2."</h2>";
    echo "<h2>".$Getal1." - ".$Getal2." = ".$Getal1 - $Getal2."</h2>";
    echo "<h2>".$Getal1." x ".$Getal2." = ".$Getal1 * $Getal2."</h2>";
    echo "<h2>".$Getal1." / ".$Getal2." = ".$Getal1 / $Getal2."</h2>";


    function EchoTafel($tafel) {
        for ($i=1; $i <= 10; $i++) { 
            echo "<h2>".$i." x ".$tafel." = ".$i * $tafel."</h2>";
        }
    }

    $Array = [3,5,8,12];

    foreach ($Array as $i) {
        EchoTafel($i);
    }
