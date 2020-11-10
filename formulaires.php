<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #2 - Formulaires</title>
</head>

<body>

<!-- Exercice 1 -->
    <form method="GET" action="user.php">
        <label for="nom1">Nom :</label>
        <input type="text" name="nom1" id="nom1"><br>
        <label for="prenom1">Prenom :</label>
        <input type="text" name="prenom1" id="prenom1">
        <input type="submit" name="form1">


    </form>

    <hr>

<!--     Exercice 2 -->
    <form method="POST" action="user.php">
        <label for="nom2">Nom :</label>
        <input type="text" name="nom2" id="nom2"><br>
        <label for="prenom2">Prenom :</label>
        <input type="text" name="prenom2" id="prenom2">
        <input type="submit" name="form2">


    </form>

    <hr>


<!--     Exercice 5 -->
<?php
# Exercice 6
if(isset($_POST['form3'])){
    $nom3 = $_POST['nom3'];
    $prenom3 = $_POST['prenom3'];
    $civ3 = $_POST['civ3'];
    $do_pdf = "pdf/";
    $do_pdf = $do_pdf . basename($_FILES['file3']['name']);

    if($_FILES['file3']['type'] != "application/pdf"){
        echo 'Fichier invalide, je veux un pdf!';
    }
    elseif(move_uploaded_file($_FILES['file3']['tmp_name'], $do_pdf)){
        echo 'Bonjour, <br>'
        . $civ3 . ' ' . $nom3 . ' ' . $prenom3 .
        '.<br>Votre fichier s\'est envoyé avec succès!' .
        '<br>Bonne journée.';
    }
    else { 
        echo "Il y a eu un problème lors de l'envoi du fichier : " . $do_pdf;
    }
}
else {
    ?>


    <form method="POST" enctype="multipart/form-data">
        <label for="civ3">Civilité :</label>
        <select name="civ3" id="civ3">
            <option value="Mr">Mr</option>
            <option value="Madame">Madame</option>
        </select><br>
        <label for="nom3">Nom :</label>
        <input type="text" name="nom3" id="nom3"><br>
        <label for="prenom3">Prenom :</label>
        <input type="text" name="prenom3" id="prenom3"><br>
        <label for="file3">Envoyer un fichier :</label>
        <input type="file" name="file3" id="file3" size="50">
        <input type="submit" name="form3">
    </form>

<?php
}
?>

</body>

</html>