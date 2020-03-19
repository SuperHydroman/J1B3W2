<?php
$huisdier = $persoon = $land = $verveling = $speelgoed = $docent = $geld = $bezigheid = "";
$huisdierErr = $persoonErr = $landErr = $vervelingErr = $speelgoedErr = $docentErr = $geldErr = $bezigheidErr = "";
$huisdierCheck = $persoonCheck = $landCheck = $vervelingCheck = $speelgoedCheck = $docentCheck = $geldCheck = $bezigheidCheck = false;

//$dataValues = ["huisdier", "persoon", "land", "verveling", "speelgoed", "docent", "geld", "bezigheid"];
//$data = $dataErr = [];
//
//foreach ($dataValues as $field) {
//    if (empty($_POST[$field])) {
//        $dataErr[$field] = "This field is required.";
//    }
//    else {
//        $input = test_input($_POST[$field]);
//        if (!preg_match("/^[a-zA-Z ]*$/", $input)) {
//            $dataErr[$field] = "Only letters and white space allowed!";
//        } else {
//            $data[$field] = $input;
//        }
//    }
//}
//
//if (count($data) == count($dataValues)) {
//    require "paniekUitkomst.php";
//} else {
//    require "paniekForm.php";
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["huisdier"])) {
        $huisdierErr = "This field is required!";
    }
    else {
        $huisdier = test_input($_POST['huisdier']);
        $huisdierCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $huisdier)) {
            $huisdierErr = "Only letters and white space allowed!";
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

    if (empty($_POST["land"])) {
        $landErr = "This field is required!";
    }
    else {
        $land = test_input($_POST['land']);
        $landCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $land)) {
            $landErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["verveling"])) {
        $vervelingErr = "This field is required!";
    }
    else {
        $verveling = test_input($_POST['verveling']);
        $vervelingCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $verveling)) {
            $vervelingErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["speelgoed"])) {
        $speelgoedErr = "This field is required!";
    }
    else {
        $speelgoed = test_input($_POST['speelgoed']);
        $speelgoedCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $speelgoed)) {
            $speelgoedErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["docent"])) {
        $docentErr = "This field is required!";
    }
    else {
        $docent = test_input($_POST['docent']);
        $docentCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $docent)) {
            $docentErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["geld"])) {
        $geldErr = "This field is required!";
    }
    else {
        $geld = test_input($_POST['geld']);
        $geldCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $geld)) {
            $geldErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["bezigheid"])) {
        $bezigheidErr = "This field is required!";
    }
    else {
        $bezigheid = test_input($_POST['bezigheid']);
        $bezigheidCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $bezigheid)) {
            $bezigheidErr = "Only letters and white space allowed!";
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
if ($huisdierCheck && $persoonCheck && $landCheck && $vervelingCheck && $speelgoedCheck && $docentCheck && $geldCheck && $bezigheidCheck) {
    require "paniekUitkomst.php";
}
else {
    require "paniekForm.php";
}

?>