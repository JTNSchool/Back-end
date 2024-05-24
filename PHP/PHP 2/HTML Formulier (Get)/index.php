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
        if($_SERVER['REQUEST_METHOD'] === 'GET')
            if (isset($_GET["Name"]) && isset($_GET["Email"])) {
                echo "<p>Bedankt voor uw gegevens.</p>";
                echo "<h1>De ingevulde gegevens zijn:</h1>";
                echo "<p>Naam:".htmlspecialchars($_GET["Name"])."</p>";
                echo "<p>Email:".htmlspecialchars($_GET["Email"])."</p>"; }
            else
                echo "<p>U heeft niet alle gegevens ingevult.</p>";
    ?>

    <form>
        <div>
            <label for="Name">Naam:</label>
            <input type="text" id="NameInput" name="Name" required="true">
        </div>
        <div>
            <label for="Email">Email:</label>
            <input type="email" id="EmailInput" name="Email" required="true">
        </div>
        <input type="submit" value="Submit">
    </form> 

</body>
</html>