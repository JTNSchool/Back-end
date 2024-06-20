<?php
require("database.php");
$pages = SendCommand("SELECT * FROM databank_php.characters");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>character - Index</title>
</head>

<body>

<header><h1>Alle <?php echo $pages->rowCount()?> characters uit de database</h1>

</header>

<div id="container">
<?php foreach ($pages as $page): ?>

    <a class="item" href="/characters/<?php echo urlencode($page["id"])?>">
        <div class="left">
            <img class="avatar" src="<?php echo "Images/".$page["avatar"]?>" alt="image">
        </div>
        <div class="right">
            <h2><?php echo $page["name"]?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $page["health"]?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $page["attack"]?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $page["defense"]?></li>
                </ul>
            </div>
        </div>
    </a>

<?php endforeach; ?>
</div>

<footer>&copy; Jacco 2024</footer>

</body>

</html>