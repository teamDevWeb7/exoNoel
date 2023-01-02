<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles en PHP</title>
</head>
<body>
<?php
echo 'Créez une boucle for qui affiche les nombres de 1 à 10.<br>';

for($i=1; $i<=10; $i++){
    echo $i;
}
echo '<br>';

echo 'Créez une boucle while qui affiche les nombres de 1 à 10.<br>';
$i=1;
while ($i<11){
    echo $i;
    $i++;
}
echo '<br>';


echo 'Créez une boucle do while qui affiche les nombres de 1 à 10.<br>';
$i=1;
do{
    echo $i;
    $i++;
}while($i<11);
echo '<br>';

echo 'Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres pairs.<br>';
for($i=1; $i<11; $i++){
    if($i%2==0){
        echo $i;
    }
}echo '<br>';

echo 'Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres impairs.<br>';
for($i=1; $i<11; $i++){
    if($i%2!=0){
        echo $i;
    }
}echo '<br>';

echo ' Créez une boucle for qui affiche les nombres de 1 à 10, mais qui saute le nombre 5.<br>';
for($i=1; $i<11; $i++){
    if($i!=5){
        echo $i;
    }
}echo '<br>';

echo 'Créez une boucle for qui affiche les nombres de 1 à 10, mais qui s\'arrête au nombre 5.<br>';
for($i=1; $i<11; $i++){
    if($i<6){
        echo $i;
    }else{
        break;
    }
}echo '<br>';

echo 'Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche le nombre 5 en rouge et les autres nombres en noir.<br>';
for($i=1; $i<11; $i++){
    if($i==5){
        echo '<span style="color : red">'.$i.'</span>';
    }
    else{
        echo $i;
    }
}echo '<br>';

echo 'Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 5.<br>';
for($i=1; $i<11; $i++){
    if($i==5){
        echo $i;
    }
}echo '<br>';

echo 'Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 7.<br>';
for($i=1; $i<11; $i++){
    if($i==7){
        echo $i;
    }
}echo '<br>';

echo 'Créez un tableau contenant les noms de 5 de vos amis.<br>
Utilisez une boucle foreach pour afficher chaque nom dans une liste HTML en utilisant la balise <li>.<br>';
$tab=['jojo', 'pierre', 'lapin','marguerite', 'tintin'];
// var_dump($tab);
echo '<ul>';
foreach($tab as $ami){
    echo '<li>'.$ami.'</li>';
}
echo '</ul><br>';

echo 'Créez un tableau contenant les noms de 5 de vos amis.
Utilisez une boucle foreach pour afficher chaque nom dans une phrase différente, par exemple "Mon ami s\'appelle nom_amis".<br>';
foreach($tab as $ami){
    if($tab[0]=='jojo'){
        echo $tab[0].' : AZERTY<br>';
    }if($tab[1]=='pierre'){
        echo $tab[1].' : Lapin<br>';
    }if($tab[2]=='lapin'){
        echo $tab[2].' : à la moutarde<br>';
    }if($tab[3]=='marguerite'){
        echo $tab[3].' : mange de l\'herbe<br>';
    }if($tab[4]=='tintin'){
        echo $tab[4].' : au pérou<br>';break;
    }
    
}

echo 'Créez un tableau contenant 5 noms de fruits et utilisez une boucle foreach pour afficher chaque fruit.<br>';
$tab_fruits=['praline', 'menthe', 'cerise', 'pomme', 'grenade'];
foreach($tab_fruits as $fruits){
    echo $fruits.' ';
}echo '<br>';

// un peu de mal 
echo 'Créez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives et utilisez une boucle foreach pour afficher chaque fruit et sa couleur.<br>';
$tab_color=array(
    // le nom des fruits est la clé et la couleur la valeur
    'cerise'=>'rouge',
    'pomme'=>'rouge',
    'melon'=>'vert',
    'kiwi'=>'vert',
    'framboise'=>'rouge'
);
foreach($tab_color as $clef=>$value){
    echo $clef.' est de couleur '.$value.'<br>';
}echo '<br>';
// var_dump($tab_color);

echo 'Créez un tableau contenant des nombres et utilisez une boucle foreach pour afficher la somme de tous les nombres.<br>';
$nbr=array(1,2,3,4,5);
$somme=0;
foreach($nbr as $value){
    echo $somme+=$value;
}
echo '<br>La valeur totale du tableau est '.$somme.'<br>';

echo 'Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en majuscules.<br>';
$pays=array('France', 'Allemagne', 'italie');
foreach($pays as $paï){
    echo strtoupper($paï).'<br>';
}

echo 'Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en minuscules.<br>';
foreach($pays as $paî){
    echo strtolower($paî).'<br>';
}

echo 'Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en capitalisant la première lettre du nom.<br>';
foreach($pays as $pai){
    echo ucfirst($pai).'<br>';
}

echo 'Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher chaque personne et son âge.<br>';
$tab_age=array(
    'Dupont'=>30,
    'Jean'=>15,
    'Miguel'=>45,
    'Patricia'=>12,
    'JOJO'=>72
);
foreach($tab_age as $clef=>$value){
    echo $clef.' a '.$value.' ans<br>';
}

echo 'Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher uniquement les personnes âgées de plus de 30 ans.<br>';
foreach($tab_age as $clé=>$valeur){
    if($valeur>=30){
        echo $clé.' a '.$valeur.' ans<br>';
    }
}

echo 'Créez un tableau contenant des noms de villes et utilisez une boucle foreach pour afficher chaque ville précédée de la phrase "J\'aimerais visiter la ville de".<br>';
$tab_villes=array('Perpignan', 'Singapour', 'Jerusalem', 'Miami');
foreach($tab_villes as $city){
    echo 'J\'aimerais vister la ville de '.$city.'<br>';
}

echo 'Créez un tableau associatif qui associe des noms de villes à leurs pays respectifs et utilisez une boucle foreach pour afficher chaque ville et son pays.<br>';
$tab_tourisme=array(
    'Paris'=>'France',
    'Londres'=>'RU',
    'Madrid'=>'Espagne',
    'Washington'=>'EU'
);
foreach($tab_tourisme as $cities=>$payys){
    echo $cities.' se situe dans le pays nommé '.$payys.'<br>';
}
?>

</body>
</html>