<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #1 - Tableaux</title>
</head>
<body>

<?php
# Fonction afficher
function view($doc) {
    echo '<p>' . $doc . '</p>';
}

# Exercice 1
$mois = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Julliet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];
# var_dump($mois);


# Exercice 2
# view($mois[2]);


# Exercice 3
# view($mois[5]);


# Exercice 4
$mois[7] = "Août";
# view($mois[7]);

# Exercice 5
$dep = [
    02 => 'Aisne',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];


# Exercice 7
$mois[13] = 'Fleurence';
# view($mois[13]);
$dep[59] = 'Nord';


# Exercice 9
for ($i = 1; $i <= count($mois); $i ++){
    view($mois[$i]);
}
for ($i = 1; $i <= count($dep); $i ++){
    view($dep[$i]);
}

# Exercice 10

foreach($mois as $i => $rmois){
    echo "Mois $i : $rmois <br>";
  }

 echo '<br><br>';
  
foreach($dep as $i => $rdep){
    echo "Le département $i a le numéro $rdep <br>";
}


?>
    
</body>
</html>