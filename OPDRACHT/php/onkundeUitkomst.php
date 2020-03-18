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
            <li><span class="noAccess">Onkunde</span></li>
        </ul>
    </div>
    <h1>Onkunde</h1>
    <div id="textBlock">
        <p>
            Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"] ?>. Neem nou <?php echo $_POST["persoon"] ?>
            . Zelfs met de hulp van een <?php echo $_POST["vakantie"] ?> of zelfs <?php echo $_POST["getal"] ?>
            kan <?php echo $_POST["persoon"] ?> niet <?php echo $_POST["kunnen"] ?>. Dat heeft niet te maken met een
            gebrek aan <?php echo $_POST["besteEigenschap"] ?>, maar met een te veel
            aan <?php echo $_POST["slechtsteEigenschap"] ?>. Te veel <?php echo $_POST["slechtsteEigenschap"] ?> leidt
            tot <?php echo $_POST["overkomen"] ?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"] ?>. Helaas
            voor <?php echo $_POST["persoon"] ?>.
        </p>
    </div>
    <footer>Gideon van den Herik - All rights reserved &copy; | 2020</footer>
</div>
</body>
</html>