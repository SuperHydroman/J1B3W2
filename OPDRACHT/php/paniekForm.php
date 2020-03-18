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
            <li><span class="noAccess">Er heerst paniek...</span></li>
            <li><a href="onkunde.php">Onkunde</a></li>
        </ul>
    </div>
    <h1>Er heerst paniek...</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div>
            <label for="huisdier">Welk dier zou je nooit als huisdier willen hebben?</label>
            <input id="huisdier" type="text" name="huisdier" value="<?php echo $huisdier ?>"><span> * <span id="errorMessage"><?php echo $huisdierErr;?></span></span>
        </div>

        <div>
            <label for="persoon">Wie is de belangrijkste persoon in je leven?</label>
            <input id="persoon" type="text" name="persoon" value="<?php echo $persoon ?>"><span> * <span id="errorMessage"><?php echo $persoonErr;?></span></span>
        </div>

        <div>
            <label for="land">In welk land zou je graag willen wonen?</label>
            <input id="land" type="text" name="land" value="<?php echo $land ?>"><span> * <span id="errorMessage"><?php echo $landErr;?></span></span>
        </div>

        <div>
            <label for="verveling">Wat doe je als je je verveelt?</label>
            <input id="verveling" type="text" name="verveling" value="<?php echo $verveling ?>"><span> * <span id="errorMessage"><?php echo $vervelingErr;?></span></span>
        </div>

        <div>
            <label for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
            <input id="speelgoed" type="text" name="speelgoed" value="<?php echo $speelgoed ?>"><span> * <span id="errorMessage"><?php echo $speelgoedErr;?></span></span>
        </div>

        <div>
            <label for="docent">Bij welke docent spijbel je het liefst?</label>
            <input id="docent" type="text" name="docent" value="<?php echo $docent ?>"><span> * <span id="errorMessage"><?php echo $docentErr;?></span></span>
        </div>

        <div>
            <label for="geld">Als je &euro; 100.000,- had, wat zou je dan kopen?</label>
            <input id="geld" type="text" name="geld" value="<?php echo $geld ?>"><span> * <span id="errorMessage"><?php echo $geldErr;?></span></span>
        </div>

        <div>
            <label for="bezigheid">Wat is je favoriete bezigheid?</label>
            <input id="bezigheid" type="text" name="bezigheid" value="<?php echo $bezigheid ?>"><span> * <span id="errorMessage"><?php echo $bezigheidErr;?></span></span>
        </div>
        <div class="button">
            <button type="submit">Versturen</button>
        </div>
    </form>
    <footer>Gideon van den Herik - All rights reserved &copy; | 2020</footer>
</div>
</body>
</html>