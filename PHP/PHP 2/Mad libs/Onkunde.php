<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mad libs Onkunde</title>
</head>
<body>


    <?php
        $ShowQuestions = include "Code.php";
    ?>

    <button onclick="location.href='Onkunde.php'">Onkunde</button>
    <button onclick="location.href='Paniek.php'">Er heerst paniek...</button>

    <?php if ($ShowQuestions) : ?>
        <form method="post">
            <div>
                <label for="WillenKunnen">Wat zou je graag willen kunnen?</label>
                <input class="required" type="text" id="WillenKunnen" name="WillenKunnen" >
            </div>
            <div>
                <label for="Persoon">Met welk persoon kun je goed opschieten?</label>
                <input class="required" type="text" id="Persoon" name="Persoon" >
            </div>
            <div>
                <label for="Getal">Wat is je favoriete getal?</label>
                <input class="required" type="text" id="Getal" name="Getal" >
            </div>
            <div>
                <label for="VakantieObject">Wat heb je altijd bij je als je op vakantie gaat?</label>
                <input class="required" type="text" id="VakantieObject" name="VakantieObject" >
            </div>
            <div>
                <label for="GoedeEigenschap">Wat is je beste eigenschap?</label>
                <input class="required" type="text" id="GoedeEigenschap" name="GoedeEigenschap" >
            </div>
            <div>
                <label for="SlechteEigenschap">Wat is je slechste eigenschap?</label>
                <input class="required" type="text" id="SlechteEigenschap" name="SlechteEigenschap" >
            </div>
            <div>
                <label for="Overkomen">Wat is het ergste dat je is overkomen?</label>
                <input class="required" type="text" id="Overkomen" name="Overkomen" >
            </div>

            <input type="submit" value="Versturen">
        </form>
    <?php else : ?>
        <?php echo "<p> Op een dag liep ".$_POST["Persoon"]." er over na tedenken om ".$_POST["WillenKunnen"]." te gaan studeren.</p>"?>
        <?php echo  "<p>Hij liep denkend door het park heen terwijl hij ".$_POST["Getal"]."keer een ".$_POST["VakantieObject"]." aan het stuiteren was.</p>"?>
        <?php echo "<p>Uit het niets dacht hij aan het ergste dat er maar kan gebeuren namelijk ".$_POST["Overkomen"]." Gelukkig was dat goed afgelopen door dat ".$_POST["Persoon"]." goed is in ".$_POST["GoedeEigenschap"]." maar het kwam allemaal door dat ".$_POST["Persoon"]." niet zo goed is in ".$_POST["SlechteEigenschap"]."</p>"?>
    <?php endif; ?>

</body>
</html>