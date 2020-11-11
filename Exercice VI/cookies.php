<?php

# Exercice 3

if(isset($_POST['snd'])){

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

setcookie('mail', $mail);
setcookie('mdp', $mdp);

header("Location: cookies2.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #2 - Cookies</title>
</head>
<body>

<header>
<h1>Login</h1>
</header>

<main>

<form method="POST" action="">

<p>
    <label for="mail">Adresse mail :</label><br>
    <input type="text" name="mail" placeholder="Ex: léa@gmail.com">
</p>
<p>
    <label for="mdp">Mot de passe :</label><br>
    <input type="password" name="mdp">
</p>
<p>
    <input type="submit" name="snd" value="Se connecter">
</p>

</form>

</main>
    
<footer>

</footer>
</body>
</html>