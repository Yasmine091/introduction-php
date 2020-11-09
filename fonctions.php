<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #1 - Fonctions</title>
</head>
<body>
    <?php
    # Exercice 1
    rTrue();
    function rTrue() {
        echo True;
    }

    echo '<hr>';


    # Exercice 2
    function func_str(string $essai) {
        return $essai;
    }
    
    $lol = "Mdr lol";
    func_str($lol);


    # Exercice 3
    function concat(string $a, string $b){
        return $a . $b;
    }
    concat("Bra", "vo!");


    # Exercice 4
    function nombres($a, $b){
        if ($a < $b){
            $results = "Le premier nombre est plus petit!";
        }
        if ($a > $b){
            $results = "Le premier nombre est plus grand!";
        }
        if ($a == $b){
            $results = "Les deux nombres sont égaux!";
        }

        return $results;
    }
    var_dump(nombres(0, 4));
    var_dump(nombres(4, 0));
    var_dump(nombres(4, 4));
    echo '<hr>';


    # Exercice 5
    function int_str(int $a, string $b){
        return $a . $b;
    }

    var_dump(int_str(9, ", joli mon neuf!"));
    echo '<hr>';


    # Exercice 6
    function personne($nom, $prenom, $age) {
        return 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . 'ans.';
    }

    var_dump(personne("EMDOUNAN ARDAM", "Yasmine", "20"));
    echo '<hr>';




    ?>

</body>
</html>