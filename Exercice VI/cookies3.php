<?php

# Exercice 5

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
<h1>Parametres</h1>
</header>

<main>

<p>
<?php

# Exercice 4

$omail = $_COOKIE['mail'];
$omdp = $_COOKIE['mdp'];


?>
</p>

<form method="POST" action="">

<p>
    <label for="mail">Nouvelle adresse mail :</label><br>
    <input type="text" name="mail" placeholder="Ex: léa2@gmail.com" value="<?php echo $omail;?>">
</p>
<p>
    <label for="mdp">Nouveau mot de passe :</label><br>
    <input type="password" name="mdp" value="<?php echo $omdp;?>">
</p>
<p>
    <input type="submit" name="snd" value="Changer mes identifiants">
</p>

</form>

</main>
    
<footer>

</footer>
</body>
</html>