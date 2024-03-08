<?php

$naam = "Rayan Aghmer"; 
$leeftijd = "17";
$woonplaats = "Amsterdam";
$temperatuur = "4.0";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variabelen</title>
</head>
<body>
    <?= $naam ?>
    <?= $leeftijd?>
    <?= $woonplaats?> 
    <?= $temperatuur?>
    <p> Mijn naam is <?= $naam ?> ik woon in <?= $woonplaats?> ik ben  <?= $leeftijd?> jaar oud en het is <?= $temperatuur?> graden.
</body>
</html>