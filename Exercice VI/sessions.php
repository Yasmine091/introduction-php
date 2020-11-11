<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #2 - Sessions</title>
</head>
<body>
    
<header>
<h1>Bienvenue!</h1>
</header>

<main>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>

<h2>A propos de vous</h2>
<p>
<?php

# Exercice 2

$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$age = $_SESSION['age'];

echo
'<b>Nom : </b>' . $nom . '<br>' . 
'<b>Prenom : </b>' . $prenom . '<br>' .  
'<b>Age : </b>' . $age . " ans";
?>
</p>

<p><a href="superglobales.php">Mes infos techniques</a></p>

</main>
    
<footer>


</body>
</html>