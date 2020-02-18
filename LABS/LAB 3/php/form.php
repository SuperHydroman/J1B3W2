<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>LAB 1 | J1B3W2</title>
</head>
<body>
    <h1>Fill in your details here: </h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <div>
                <label for="name">Name </label>
                <input id="name" type="text" name="user_name" value="<?php echo $user_name ?>"><span> * <span id="errorMessage"><?php echo $user_nameErr;?></span></span>
            </div>
            <div>
                <label for="email">E-mail </label>
                <input id="email" type="text" name="user_mail" value="<?php echo $user_mail ?>"><span> * <span id="errorMessage"><?php echo $user_mailErr;?></span></span>
            </div>
            <div>
                <button type="submit">Submit data!</button>
            </div>
        </div>
    </form>
</body>
</html>