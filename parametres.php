<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #2 - Parametres</title>
</head>
<body>
    <?php
    # Afficher les erreurs
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    # Exercice 1 et 2
    $nom = $_GET['nom'] ?? '';
    $prenom = $_GET['prenom'] ?? '';
    $age = $_GET['age'] ?? '';

    if (isset($_GET['nom']) AND (isset($_GET['prenom']) AND isset($_GET['age']))){
        echo 'Voici ' . $nom . ' ' . $prenom . ', agée de ' . $age . ' ans.';
    }
    else
    {
        echo 'Qui est-tu?';
        echo '<hr>';
    }


   /*  if (!isset($_GET['nom']) AND !isset($_GET['prenom'])) {
        echo 'Qui est-tu?';
    }
    else if (!isset($_GET['age'])) {
        echo 'Quel age as-tu?';
    }
    else {
        echo 'Voici ' . $nom . ' ' . $prenom . ', agée de ' . $age . ' ans.';
        echo '<hr>';
    } */


    # Exercice 3
    $dDebut = $_GET['dateDebut'] ?? '';
    $dFin = $_GET['dateFin'] ?? '';
    if (isset($_GET['dateDebut']) AND (isset($_GET['dateFin']))){
        echo 'Début : ' . $dDebut . ' | Fin : ' . $dFin;
    }
 /*    else
    {
        echo 'Je suis paumé! :@';
        echo '<hr>';
    } */



    # Exercice 4
    $lang = $_GET['langage'] ?? '';
    $serv = $_GET['serveur'] ?? '';
    if (isset($_GET['langage']) AND (isset($_GET['serveur']))){
        echo 'Langage : ' . $lang . ' | Serveur : ' . $serv;
    }
    /* else
    {
        echo 'Que fais-tu?';
        echo '<hr>';
    }
    */


    # Exercice 5
    $week = $_GET['semaine'] ?? '';
    if (isset($_GET['semaine'])){
        echo 'On est la semaine ' . $week;
    }
    /* else
    {
        echo 'Quelle semaine?';
        echo '<hr>';
    }
    */


    # Exercice 6
    $bat = $_GET['batiment'] ?? '';
    $sal = $_GET['salle'] ?? '';
    if (isset($_GET['batiment']) AND isset($_GET['salle'])){
        echo 'On est dans le ' . $bat . ', dans la salle ' . $sal;
    }
    /* else
    {
        echo 'Où?';
        echo '<hr>';
    }
    */
    
    ?>
</body>
</html>