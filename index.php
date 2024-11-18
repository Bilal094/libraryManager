<?php
require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheekmanager</title>
    <link rel="stylesheet" href="resources/style/style.css">
</head>
<body>
    <div id="authentication">
        <form action="" method="POST">
            <h2>Log in of maak een account aan om verder te kunnen</h2>
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email"> <br>
            </div>

            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" name="password"> <br>
            </div>
            
            <button>Log in</button>
        </form>
    </div>
</body>
</html>