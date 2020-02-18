<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/output.css">
    <title>LAB 1 | J1B3W2</title>
</head>
<body>
    <h1>Your details are the following:</h1>
    <div id="output">
        <a href="index.php"><< Another try?</a>
        <img src="../img/logo.png" alt="logo">
        <div>
            <p>Name <span><?php echo $_POST["user_name"] ?></span></p>
            <p>E-mail <span><?php echo $_POST["user_mail"] ?></span></p>
        </div>
        <footer>Gideon van den Herik - All rights reserved &copy;</footer>
    </div>
</body>
</html>