<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #2 - Cookies</title>
</head>
<body>

<header>
<h1>Voici vos identifiants</h1>
</header>

<main>


<p>
<?php

# Exercice 4

$mail = $_COOKIE['mail'];
$mdp = $_COOKIE['mdp'];

echo '<b>Mail : </b>' . $mail . '<br>'
. '<b>Mot de passe : </b>' . $mdp;

?>
</p>

<p>
<a href="cookies3.php">Modifier mes identifiants</a>
</p>

</main>
    
<footer>

</footer>
</body>
</html>