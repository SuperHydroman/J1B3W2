<?php
$kunnen = $persoon = $getal = $vakantie = $besteEigenschap = $slechtsteEigenschap = $overkomen =  "";
$kunnenErr = $persoonErr = $getalErr = $vakantieErr = $besteEigenschapErr = $slechtsteEigenschapErr = $overkomenErr = "";
$kunnenCheck = $persoonCheck = $getalCheck = $vakantieCheck = $besteEigenschapCheck = $slechtsteEigenschapCheck = $overkomenCheck = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kunnen"])) {
        $kunnenErr = "This field is required!";
    }
    else {
        $kunnen = test_input($_POST['kunnen']);
        $kunnenCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $kunnen)) {
            $kunnenErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["persoon"])) {
        $persoonErr = "This field is required!";
    }
    else {
        $persoon = test_input($_POST['persoon']);
        $persoonCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $persoon)) {
            $persoonErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["getal"])) {
        $getalErr = "This field is required!";
    }
    else {
        $getal = test_input($_POST['getal']);
        $getalCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $getal)) {
            $getalErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["vakantie"])) {
        $vakantieErr = "This field is required!";
    }
    else {
        $vakantie = test_input($_POST['vakantie']);
        $vakantieCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $vakantie)) {
            $vakantieErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["besteEigenschap"])) {
        $besteEigenschapErr = "This field is required!";
    }
    else {
        $besteEigenschap = test_input($_POST['besteEigenschap']);
        $besteEigenschapCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $besteEigenschap)) {
            $besteEigenschapErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["slechtsteEigenschap"])) {
        $slechtsteEigenschapErr = "This field is required!";
    }
    else {
        $slechtsteEigenschap = test_input($_POST['slechtsteEigenschap']);
        $slechtsteEigenschapCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $slechtsteEigenschap)) {
            $slechtsteEigenschapErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["overkomen"])) {
        $overkomenErr = "This field is required!";
    }
    else {
        $overkomen = test_input($_POST['overkomen']);
        $overkomenCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $overkomen)) {
            $overkomenErr = "Only letters and white space allowed!";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//  Only displays the answers, when both inputs have been filled in!
if ($kunnenCheck && $persoonCheck && $getalCheck && $vakantieCheck && $besteEigenschapCheck && $slechtsteEigenschapCheck && $overkomenCheck) {
    require "onkundeUitkomst.php";
}
else {
    require "onkundeForm.php";
}

?>