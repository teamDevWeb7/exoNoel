<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les variables en PHP</title>
</head>
<body>

<?php
echo 'Créez une variable $nom et affectez-lui votre nom. Affichez la variable avec echo.<br>';
$nom='SURAY';
echo $nom;

echo '<br>Créez une variable $age et affectez-lui votre âge. Affichez la variable avec echo.<br>';
echo $age=25;

echo '<br>Créez une variable $estEtudiant et affectez-lui true si vous êtes étudiant, false sinon.
Affichez la variable avec echo.<br>';
$estEtudiant=true;
if($estEtudiant==1){
     echo $nom.' est étudiant';
}else{
     echo $nom.' n\'est pas étudant';
}

echo '<br>Créez une variable $taille et affectez-lui votre taille en centimètres. Affichez la variable avec echo.<br>';
$taille=170;
echo $taille.' cms<br>';

echo 'Créez une variable $prix et affectez-lui le prix d\'un article à 50 euros.<br>Affichez le prix avec echo en utilisant la fonction number_format pour afficher le prix avec des virgules comme séparateur des milliers.<br>';
// la question est elle bien comprise?
$prix=50;
echo number_format($prix);

echo '<br>Créez une variable $phrase et affectez-lui une phrase de votre choix.
Affichez la longueur de la phrase avec echo en utilisant la fonction strlen.<br>';
$phrase='Tintin et toto jouent du tambour';
echo strlen($phrase).' est la taille de la phrase '.$phrase;

echo '<br>Créez une variable $texte et affectez-lui un texte de votre choix.
Affichez la première lettre du texte avec echo en utilisant la fonction substr.<br>';
$texte='Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, modi.';
echo substr($texte, 0, -70);

echo'<br>Créez une variable $nombre et affectez-lui un nombre de votre choix.
Affichez le nombre au carré avec echo en utilisant l\'opérateur **.<br>';
$nbr=6;
echo 'Le carré de '.$nbr.' est '.$nbr**2;

echo '<br>Créez une variable $nombre1 et affectez-lui un nombre de votre choix.
Créez une variable $nombre2 et affectez-lui un autre nombre de votre choix.
Affichez la somme des deux nombres avec echo en utilisant l\'opérateur +.<br>';
$nbr1=6;
$nbr2=8;
echo 'La somme des deux nbrs est '.($nbr1+$nbr2);

echo '<br>Créez une variable $animal et affectez-lui le nom d\'un animal de votre choix.
Affichez la variable avec echo en utilisant la fonction strtoupper pour mettre le nom de l\'animal en majuscules.<br>';
$animal='mouton';
echo strtoupper($animal);

?>
</body>
</html>
