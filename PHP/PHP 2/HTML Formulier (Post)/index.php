<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML Formulier</title>
</head>
<body>

    <?php
        $NameMSG = "*";
        $EmailMSG = "*";

        if($_SERVER['REQUEST_METHOD'] === 'POST')
            if ($_POST["Name"] !== "" && $_POST["Email"] !== "" ) {
                echo "<p>Bedankt voor uw gegevens.</p>";
                echo "<h1>De ingevulde gegevens zijn:</h1>";
                echo "<p>Naam:".htmlspecialchars($_POST["Name"])."</p>";
                echo "<p>Email:".htmlspecialchars($_POST["Email"])."</p>"; }
            else
                echo "<p>U heeft niet alle gegevens ingevult.</p>";
                if ($_POST["Name"] === "") {
                    $NameMSG = "* Name is required"; }

                if ($_POST["Email"] === "") {
                    $EmailMSG =  "* Email is required"; }
    ?>

    <form method="post">
        <div>
            <label for="Name">Naam:</label>
            <input class="required" type="text" id="Name" name="Name" >
            <span class="requiredMsg"><?php echo $NameMSG ?></span>
        </div>
        <div>
            <label  for="Email">Email:</label>
            <input class="required" type="email" id="Email" name="Email" >
            <span class="requiredMsg"><?php echo $EmailMSG ?></span>
        </div>
        <input type="submit" value="Submit">
    </form> 

</body>
</html>