<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dynamishe website</title>
</head>

<?php
    $id = "Loading...";
    $text = "Loading...";
    date_default_timezone_set("Europe/Amsterdam");
    if (date("h") >= 6 && date("h") < 12) { $id = "morning"; $text = "Goedemorgen"; }
    if (date("h") >= 12 && date("h") < 18) { $id = "afternoon"; $text = "Goede middag"; }
    if (date("h") >= 18 && date("h") < 0) { $id = "evening"; $text = "Goede avond"; }
    if (date("h") >= 0 && date("h") < 6) { $id = "night"; $text = "Goede nacht"; }

?>

<body id="<?php echo $id ?>">

    <?php
        echo "<h1>$text</h1>";
        echo "<h1> Het is nu ".date("h:i")."</h1>";
        ?>


</body>
</html>