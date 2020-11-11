<?php
    # Afficher les erreurs
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    # Exercice 3
    if(isset($_GET['form1'])){
        $nom1 = $_GET['nom1'];
        $prenom1 = $_GET['prenom1'];

        echo $nom1 . ' ' . $prenom1;
        /* if(){

        } */
    }

     # Exercice 4
     if(isset($_POST['form2'])){
        $nom2 = $_POST['nom2'];
        $prenom2 = $_POST['prenom2'];

        echo $nom2 . ' ' . $prenom2;
        /* if(){

        } */
    }
?>