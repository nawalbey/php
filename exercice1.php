<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Ajout et suppression d'éléments
// Créez un tableau vide.
// Ajoutez les nombres de 1 à 5 à ce tableau.
// Supprimez le troisième élément.
// Affichez le contenu final du tableau.
    
    $tableau = [];
    array_push($tableau, 1, 2, 3, 4, 5);
    unset($tableau[2]);
    print_r($tableau);


    // Recherche et modification
// Créez un tableau contenant plusieurs noms de pays.
// Vérifiez si "France" est présent dans le tableau.
// Si oui, remplacez "France" par "Espagne".
// Affichez le tableau modifié.
    $tableau = ["france", "italie", "new-york", "espagne", 'chicago',];
    in_array("france", $tableau);
    array_splice($tableau, 0, 1, "espagne");
    print_r($tableau);
    echo "<br>";




    # Tirage du loto :
/*
- on veut 5 n° au hasard
- on des n° différents
- numéros de 1 à 49
- comment savoir si le n° est déjà sorti ?
- Trier les n° pour l'affichage final
- les numeros doivent etre séparé par des tirets (-) dans l'affichage final
- exemple : 5-7-12-49-34

 

- utilisez la fonction rand pour générer un nombre aléatoire
- exemple : $nombreAleatoire = rand(1, 49);
*/

    // $nombreAleatoire = rand(1, 49);
    // echo $nombreAleatoire;
    // $tableau = [];
    // for($i = 0; $i<5; $i++) {
    //     $nombreAleatoire = rand(1, 49);
    //     if($tableau)
    // }
    
    $numeros = [];
    while (count($numeros) < 5) {
        $numeroAleatoire = rand(1, 49);
        if (!in_array($numeroAleatoire, $numeros)) {
            $numeros[] = $numeroAleatoire;
        }
    }
    sort($numeros);
    $numeros = implode("-", $numeros);
    echo $numeros;


    # Tirage EuroMillions
/*
 - Pour jouer à EuroMillions , il vous faut cocher 7 numéros : 
 - 5 numéros sur une grille de 50 numéros 
 - et 2 étoiles sur une grille de 12 numéros. 
 - Vous remportez le jackpot si vous avez 5 numéros gagnants et les 2 étoiles.

 

 - ecrire une fonction tirage qui prends un deux parametres
 - le premier parametres correspond au nombre de numeros a tiré
 - le second correspond au nombre maximum que les numeros ne doivent pas dépasser
*/
function tirage( $num, $max){
    $numero = [];
    while(count($numeros) < $num) {
        $numeroAleatoiore = rand(1, $max);
        if(!in_array($numeroAleatoiore, $numeros)){
          $numeros[] = $numeroAleatoiore;  
        }
    }
    sort( $numeros);
    return $numeros;

}
$numeros = tirage(5, 50);
$etoiles = tirage( 2, 12);
echo implode('-', $numeros). " ".implode('-', $etoiles);

    ?>