<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Login</title>

</head>


<form action="/ctrl/login.php" method="post">

    <!-- Identifiant -->
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>

    <!-- Mots de passe -->
    <div>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass">
    </div>

    <div class="submit">
        <button type="submit">Se connecter</button>

    </div>


    </body>


</html>