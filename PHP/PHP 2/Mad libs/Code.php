<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') return true;

    if (count(array_filter($_POST, function ($element) { return empty($element); })) === 0)
        return false;
    else {
        echo "<p>U heeft niet alle gegevens ingevult:</p>";
        return true; }


