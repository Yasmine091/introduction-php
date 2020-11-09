<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #1 - Fonctions</title>
</head>

<body>
    <?php
    # Afficher les erreurs
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    # Exercice 1
    rTrue();
    function rTrue()
    {
        echo True;
    }

    echo '<hr>';


    # Exercice 2
    function func_str(string $essai)
    {
        return $essai;
    }

    $lol = "Mdr lol";
    echo func_str($lol);
    echo '<hr>';


    # Exercice 3
    function concat(string $a, string $b)
    {
        return $a . $b;
    }
    echo concat("Bra", "vo!");
    echo '<hr>';


    # Exercice 4
    function nombres($a, $b)
    {
        if ($a < $b) {
            $results = "Le premier nombre est plus petit!";
        }
        if ($a > $b) {
            $results = "Le premier nombre est plus grand!";
        }
        if ($a == $b) {
            $results = "Les deux nombres sont égaux!";
        }

        return $results;
    }
    echo nombres(0, 4);
    echo nombres(4, 0);
    echo nombres(4, 4);
    echo '<hr>';


    # Exercice 5
    function int_str(int $a, string $b)
    {
        return $a . $b;
    }

    echo int_str(9, ", joli mon neuf!");
    echo '<hr>';


    # Exercice 6
    function personne($nom, $prenom, $age)
    {
        return 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . ' ans.';
    }

    echo personne("EMDOUNAN ARDAM", "Yasmine", "20");
    echo '<hr>';


    # Exercice 7
    function age_genre($age, $genre)
    {
        if ($age > 18 and $genre == "homme") {
            $gre_ag = "Vous êtes un homme et vous êtes majeur<br>";
        }
        if ($age < 18 and $genre == "homme") {
            $gre_ag = "Vous êtes un homme et vous êtes mineur<br>";
        }
        if ($age > 18 and $genre == "femme") {
            $gre_ag = "Vous êtes une femme et vous êtes majeure<br>";
        }
        if ($age < 18 and $genre == "femme") {
            $gre_ag = "Vous êtes une femme et vous êtes mineure<br>";
        }

        return $gre_ag;
    }
    echo 'CAS 1 : ', age_genre(16, "homme");
    echo 'CAS 2 : ', age_genre(20, "homme");
    echo 'CAS 3 : ', age_genre(16, "femme");
    echo 'CAS 4 : ', age_genre(20, "femme");
    echo '<hr>';


    # Exercice 8
    function somme($a, $b, $c)
    {
        if (is_null($a)) {
            $a = 9;
        }
        if (is_null($b)) {
            $b = 9;
        }
        if (is_null($c)) {
            $c = 9;
        }

        return $a + $b + $c;
    }

    echo somme(null, 9, 9);
    ?>

</body>

</html>