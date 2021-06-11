<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 1</title>
</head>
<body>
    <h1># exercice 5</h1>
<p>Créez une variable âge et une variable genre. 
Afficher aléatoirement vous êtes une femme et vous avez xans 
ou vous êtes un homme et vous avez xans.
</p>

<?php
$age = (random_int(0,121));
$sex = array('une femme',' un homme');
$aleatoire = rand('0', count($sex)-1);
echo ' Bonjour, tu es '.$sex[$aleatoire]. ' et tu as '.$age. ' an(s)';
?>
</body>
</html>