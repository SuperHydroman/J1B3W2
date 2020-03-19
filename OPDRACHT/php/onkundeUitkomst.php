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
    <h1>Onkunde</h1>
    <div id="textBlock">
        <p>
            Er zijn veel mensen die niet kunnen <?php echo $kunnen ?>. Neem nou <?php echo $persoon ?>
            . Zelfs met de hulp van een <?php echo $vakantie ?> of zelfs <?php echo $getal ?>
            kan <?php echo $persoon ?> niet <?php echo $kunnen ?>. Dat heeft niet te maken met een
            gebrek aan <?php echo $besteEigenschap ?>, maar met een te veel
            aan <?php echo $slechtsteEigenschap ?>. Te veel <?php echo $slechtsteEigenschap ?> leidt
            tot <?php echo $overkomen ?> en dat is niet goed als je wilt <?php echo $kunnen ?>. Helaas
            voor <?php echo $persoon ?>.
        </p>
    </div>
    <footer>Gideon van den Herik - All rights reserved &copy; | 2020</footer>
</div>
</body>
</html>