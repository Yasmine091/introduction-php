<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #1 - Boucles</title>
</head>
<body>

<!-- Exercice 1 -->

<?php
    for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}
?> 
<hr>

<!-- Exercice 2 -->
<form method="POST">
<?php $b = mt_rand(0, 101);?>
<input type="hidden" name="rnd-b" value="<?=$b;?>">
<input type="submit" name="rnd-c" value="Exercice 2">
<br>
<?php
if (isset($_POST['rnd-c'])) {

    $nb = $_POST['rnd-b'];

    for ($a = 0; $a <= 20; $a++) {
    $multp = $a * $nb;
    echo $multp . "<br>";
    
    }
}
?>
</form>
<hr>

<!-- Exercice 3 -->
<form method="POST">
<?php $d = mt_rand(0, 101);?>
<input type="hidden" name="rnd-d" value="<?=$d;?>">
<input type="submit" name="ren-c" value="Exercice 3">
<br>

<?php
if (isset($_POST['ren-c'])) {

    $nd = $_POST['rnd-d'];
    
    for ($c = 100; $c >= 11; $c--) {
    $multp2 = $c * $nd;
    echo $multp2 . "<br>";
    
    }
}

?>
</form>
<hr>

<!-- Exercice 4 -->
<?php
    
    for ($e = 1; $e <= 10; $e++) {
    $e2 = $e / 2;
    $er = $e + $e2;
    echo $er . "<br>";
    }

?>

<!-- Exercice 5 -->
<?php
    
    for ($f = 1; $f <= 15; $f++) {
    echo "<br>" . $f . " - On y arrive presque...";
    }

?>
<hr>

<!-- Exercice 6 -->
<?php
    
    for ($g = 20; $g >= 0; $g--) {
    echo "<br>" . $g . " - C'est presque bon...";
    }

?>
<hr>

<!-- Exercice 7 -->
<?php
    
    for ($h = 1; $h <= 100; $h = $h+15) {
    echo "<br>" . $h . " - On tient le bon bout...";
    }

?>
<hr>

<!-- Exercice 8 avec while pour tester!!! -->
<?php
    $i = 200;
    while ($i >= 0) {
    echo "<br>" . $i . " - Enfin ! ! !";
    $i = $i - 12;
    }

?>

</body>
</html>