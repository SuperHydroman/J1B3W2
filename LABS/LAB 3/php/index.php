<?php
$user_name = $user_mail = "";
$user_nameErr = $user_mailErr = "";
$user_nameCheck = $user_mailCheck = false;
$formCompleted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $user_nameErr = "Name is required!";
    }
    else {
        $user_name = test_input($_POST['user_name']);
        $user_nameCheck = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $user_name)) {
            $user_nameErr = "Only letters and white space allowed!";
        }
    }

    if (empty($_POST["user_mail"])) {
        $user_mailErr = "Email is required!";
    }
    else {
        $user_mail = test_input($_POST["user_mail"]);
        $user_mailCheck = true;
        // check if e-mail address is well-formed
        if (!filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
            $user_mailErr = "Invalid email format!";
        }
    }

    //  Only displays the answers, when both inputs have been filled in!
    if ($user_nameCheck && $user_mailCheck) {
        $formCompleted = true;
    }
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($formCompleted) {
    require "output.php";
}
else {
    require "form.php";
}

?>