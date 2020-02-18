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
<h1>Fill in your details here:  </h1>
    <form action="../../LAB%202/php/welcome.php" method="POST">
        <div>
            <div>
                <label for="name">Name: </label>
                <input required id="name" type="text" name="user_name">
            </div>
            <div>
                <label for="email">E-mail: </label>
                <input required id="email" type="email" name="user_mail">
            </div>
            <div>
                <button type="submit">Submit data!</button>
            </div>
        </div>
    </form>
</body>
</html>