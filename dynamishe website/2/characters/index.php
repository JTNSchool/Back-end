<?php
require_once('../database.php');
$pages = SendCommand("SELECT * FROM databank_php.characters");
$url = parse_url($_SERVER['REQUEST_URI']);
$path = array_values(array_filter(explode('/', $url['path'])));

if (isset($path[0]) && $path[0] === "characters" && isset($path[1])):
    $page = SendPrepared("SELECT * FROM databank_php.characters WHERE id = :id", ['id' => $path[1]])->fetch();
endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?php echo $page["name"]?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../CSS/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $page["name"]?></h1>
    <a class="backbutton" href="/index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="<?php echo "../Images/".$page["avatar"]?>"
            <div class="stats" style="background-color: <?php echo $page["color"]?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $page["health"]?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $page["attack"]?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $page["defense"]?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $page["weapon"]?></li>
                    <li><b>Armor</b>: <?php echo $page["armor"]?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $page["bio"]?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Jacco 2024</footer>
</body>
</html>