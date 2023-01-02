<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions en php</title>
</head>
<body>
    <?php
        echo 'Écrivez une fonction qui prend une chaîne de caractères en entrée et renvoie une chaîne de caractères qui contient tous les caractères de la chaîne d\'entrée, mais en ordre inverse.<br>';
        $carac='Lundi matin le roi, la reine et le petit prince';
        function reverse($carac){
            echo strrev($carac);
        }
        reverse($carac);

        echo '<br>Écrivez une fonction qui prend un tableau de chaînes de caractères en entrée et renvoie un tableau de chaînes de caractères qui contient toutes les chaînes du tableau d\'entrée, mais en ordre alphabétique.<br>';
        $tab_carac=array('A', 'G', 'I', 'J', 'Z', 'B');
        function ordre($tab_carac){
           sort($tab_carac);
           print_r($tab_carac);
        }
        ordre($tab_carac);

        echo '<br>Écrivez une fonction qui prend un tableau d\'entiers en entrée et renvoie le nombre d\'éléments du tableau qui sont supérieurs à la moyenne des éléments du tableau.<br>';
        $t_tab=array(5,7,9,12,45,67);
        function patate($t_tab){
            $somme=0;
            for($i=0; $i<sizeof($t_tab); $i++){
                $somme=$somme+$t_tab[$i];
            }
            $moyenne=$somme/sizeof($t_tab);
            foreach($t_tab as $value){
                if($value>$moyenne){
                    echo $value.'<br>';
                }
            }
        }
        patate($t_tab);

        echo '<br>Écrivez une fonction qui prend un entier en entrée et renvoie le nombre de diviseurs de cet entier.<br>';
        $nombr=30;
        $resul=0;
        function divis($nombr, $resul){
            for($i=1; $i<$nombr; $i++){
                if($nombr%$i==0){
                    $resul++;
                }
            }
            return $resul;
        }
        $resultat=divis($nombr, $resul);
        echo $resultat;
        
        echo '<br>Écrivez une fonction qui prend un tableau d\'entiers en entrée et renvoie le nombre de valeurs uniques dans le tableau.<br>';
        $tab_entier=array(3, 1, 6, 8, 5, 3, 8);
        $compil=0;
        function verif($tab_entier, $compil){
            for ($i=0; $i<sizeof($tab_entier); $i++){
                for($j=0; $j<$i-1; $j++){
                    if($tab_entier[$i]==$tab_entier[$j]){
                        // compil +2 pour le nbr qui boucle et son double
                        $compil=$compil+2;
                        break;}
                }
            }
            // la taille du tab - les doubles
            return (sizeof($tab_entier)-$compil);
        }
        echo verif($tab_entier, $compil);

    ?>
</body>
</html>