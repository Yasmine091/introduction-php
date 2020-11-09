<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP #1</title>
</head>
<body>

<!-- Consigne 1 -->

<?php
    for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}
?> 
<hr>

<!-- Consigne 2 -->
<form method="POST">
<?php
    for ($a = 0; $a <= 20; $a++) {
    $b = mt_rand(0, 101);
    print '<input type="hidden" name="rnd-b" value="'. $b .'">';
    $nb = $_POST['rnd-b'];
    $multp = $a * $nb;
    echo $multp . "<br>";
}
?>
</form>

</body>
</html>