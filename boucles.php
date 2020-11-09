<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #1</title>
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

</body>
</html>