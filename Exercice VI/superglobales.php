<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #2 - Superglobales</title>
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

<h2>Informations techniques</h2>
<?php
# Exercice 1

$usrag = $_SERVER['HTTP_USER_AGENT'];
$usrip = $_SERVER['REMOTE_ADDR'];
$svname = $_SERVER['SERVER_NAME'];

echo
'<b>Connexion : </b>' . $usrag . '<br>' . 
'<b>Adresse IP : </b>' . $usrip . '<br>' .  
'<b>Serveur : </b>' . $svname;


# Exercice 2
$_SESSION['nom'] = "EMDOUNAN ARDAM";
$_SESSION['prenom'] = "Yasmine";
$_SESSION['age'] = 20;

?>

<p><a href="sessions.php">Mes infos personnelles</a></p>

</main>
    
<footer>

</footer>
</body>
</html>