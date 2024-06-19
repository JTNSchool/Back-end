<?php
require("database.php");
$pages = SendCommand("SELECT id, name, description FROM databank_php.onderwerpen");
$url = parse_url($_SERVER['REQUEST_URI']);
$path = array_values(array_filter(explode('/', $url['path'])));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/header.css">
    <link rel="stylesheet" href="/CSS/body.css">
    <link rel="stylesheet" href="/CSS/footer.css">
    <title>Eindopdracht</title>
</head>

<body>
<?php
require("Includes/header.php");

?>


<?php if (isset($path[0]) && $path[0] === "onderwerpen" && isset($path[1])): ?>
    <?php
        $page = SendPrepared("SELECT name, description, image FROM databank_php.onderwerpen WHERE id = :id", ['id' => $path[1]])->fetch();
        ?>
    <h1><?php  echo $page["name"]?></h1>
    <p><?php  echo $page["description"]?></p>
    <img src="<?php echo "/Images/".$page["image"]?>" alt="image" height="100" width="100">
<?php endif ?>

<?php require("Includes/footer.php") ?>

</body>

</html>