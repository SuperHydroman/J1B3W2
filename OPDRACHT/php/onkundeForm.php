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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div>
            <label for="kunnen">Wat zou je graag willen kunnen?</label>
            <input id="kunnen" type="text" name="kunnen" value="<?php echo $kunnen ?>"><span> * <span id="errorMessage"><?php echo $kunnenErr;?></span></span>
        </div>

        <div>
            <label for="persoon">Met welke persoon kun je goed opschieten?</label>
            <input id="persoon" type="text" name="persoon" value="<?php echo $persoon ?>"><span> * <span id="errorMessage"><?php echo $persoonErr;?></span></span>
        </div>

        <div>
            <label for="getal">Wat is je favoriete getal?</label>
            <input id="getal" type="text" name="getal" value="<?php echo $getal ?>"><span> * <span id="errorMessage"><?php echo $getalErr;?></span></span>
        </div>

        <div>
            <label for="vakantie">Wat heb je altijd bij als je op vakantie gaat?</label>
            <input id="vakantie" type="text" name="vakantie" value="<?php echo $vakantie ?>"><span> * <span id="errorMessage"><?php echo $vakantieErr;?></span></span>
        </div>

        <div>
            <label for="besteEigenschap">Wat is je beste persoonlijke eigenschap?</label>
            <input id="besteEigenschap" type="text" name="besteEigenschap" value="<?php echo $besteEigenschap ?>"><span> * <span id="errorMessage"><?php echo $besteEigenschapErr;?></span></span>
        </div>

        <div>
            <label for="slechtsteEigenschap">Wat is je slechtste persoonlijke eigenschap?</label>
            <input id="slechtsteEigenschap" type="text" name="slechtsteEigenschap" value="<?php echo $slechtsteEigenschap ?>"><span> * <span id="errorMessage"><?php echo $slechtsteEigenschapErr;?></span></span>
        </div>

        <div>
            <label for="overkomen">Wat is het ergste dat je kan overkomen?</label>
            <input id="overkomen" type="text" name="overkomen" value="<?php echo $overkomen ?>"><span> * <span id="errorMessage"><?php echo $overkomenErr;?></span></span>
        </div>

        <div class="button">
            <button type="submit">Versturen</button>
        </div>
    </form>
    <footer>Gideon van den Herik - All rights reserved &copy; | 2020</footer>
</div>
</body>
</html>