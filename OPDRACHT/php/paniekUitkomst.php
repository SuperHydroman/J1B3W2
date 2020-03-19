<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mad Libs</title>
    <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1 id="title">Mad Libs</h1>
<div id="container">
    <div id="header">
        <ul>
            <li><a href="paniek.php">Er heerst paniek...</a></li>
            <li><a href="onkunde.php">Onkunde</a></li>
        </ul>
    </div>
    <h1>Er heerst paniek...</h1>
    <div id="textBlock">
        <p>Er heerst paniek in het koninkrijk <?php echo $land ?>. Koning <?php echo $docent ?> is ten einde raad en als koning <?php echo $docent ?> ten
            einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $persoon ?>.
        </p>
        <p>
            "<?php echo $persoon ?>! Het is een ramp! Het is een schande!"
        </p>
        <p>
            "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
        </p>
        <p>
            "Mijn <?php echo $huisdier ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $speelgoed ?> voor hem gekocht!"
        </p>
        <p>
            "Majesteit, uw <?php echo $huisdier ?> komt vast vanzelf weer terug?"
        </p>
        <p>
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid ?>?"
        </p>
        <p>
            "Maar Sire, daar kunt u toch uw <?php echo $geld ?> voor gebruiken."
        </p>
        <p>
            "<?php echo $persoon ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
        </p>
        <p>
            "<?php echo $verveling ?>, Sire."
        </p>
    </div>
    <footer>Gideon van den Herik - All rights reserved &copy; | 2020</footer>
</div>
</body>
</html>