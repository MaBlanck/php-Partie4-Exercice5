<?php 
function showstring($string = 'Hello you', $number = 31)
{
    return $string . ' ' . $number;
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 5 Partie 4</title>
</head>
<body>
    <h1>Exercice 5 Partie 4</h1>
    <p><?= showstring()?></p>
</body>
</html>