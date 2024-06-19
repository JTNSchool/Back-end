<?php
    include "variables.php";

    echo "<p>Je naam is ".$Voornaam." ".$Achternaam."</p>";
    echo "<p>En je fruitstukken zijn: </p>";
    foreach ($Fruitmand as $FruitStuk) {
        echo "<p>".$FruitStuk."</p>";
    }

