<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php // Exo 1:
// À partir de la chaîne "La maison bleue", extrayez la sous-chaîne "bleue". pui affichez la
    $chaine = "La maison bleue";
    $mot = substr($phrase, 10, 5);

    echo $mot;


    // Exo 2:
// Remplacez le mot "mauvais" par "excellent" dans la chaîne suivante.
    $avis = "Ce film était vraiment mauvais.";
    // Effectuez le remplacement.
    
    $text = "ce film éetait vraiment mauvais";

    $nouveauText = str_replace("mauvais", "excellent", $text);

    echo $nouveauText;

    // Exo 3:
// Vous avez une chaîne de texte et vous souhaitez capitaliser la première lettre de cette chaîne.
// La chaîne de texte
    $texte = "bienvenue sur notre site web.";
    // Capitalisez la première lettre
    
    $capitalizedText = ucfirst($text);

    echo "<p>" . $capitalizedText . "</p>";

    // Exo 5:
// Vous avez des informations sur un produit : nom, prix et quantité.
    $nomProduit = "Ordinateur portable";
    $prixUnitaire = 899.99;
    $quantite = 3;


    // Calculez le prix total pour le produit et affichez-le.
    $prixtotal = $prixUnitaire * $quantite;

    echo "<p>" . $prixtotal . "<p>";

    // Exo 6:
// Vous avez un panier d'achats avec plusieurs articles et vous souhaitez calculer le prix total avec une remise.
// Détails des articles
    $article1 = "Livre";
    $prixArticle1 = 12.99;
    $quantiteArticle1 = 2;
    $article2 = "DVD";
    $prixArticle2 = 9.99;
    $quantiteArticle2 = 3;
    $article3 = "Casque audio";
    $prixArticle3 = 49.99;
    $quantiteArticle3 = 1;
    // Calcul du prix total avant remise et affichage
// Calcul de la remise (10 % du prix total avant remise) et affichage
// Calcul du prix total après remise et affichage
    
    // Détails des articles
    
    $article1 = "Livre";

    $prixArticle1 = 12.99;

    $quantiteArticle1 = 2;



    $article2 = "DVD";

    $prixArticle2 = 9.99;

    $quantiteArticle2 = 3;



    $article3 = "Casque audio";

    $prixArticle3 = 49.99;

    $quantiteArticle3 = 1;

    // Calcul du prix avant la remise et affichage
    
    $prixAvantremise = $prixArticle1 * $quantiteArticle1 + $prixArticle2 * $quantiteArticle2 + $prixArticle3;

    echo $prixAvantremise;

    // Calcul de la remise (10 % du prix total avant remise) et affichage
    
    echo "<br>" . $remise = $prixAvantremise * 0.1;

    // Calcul du prix total après remise et affichage
    
    echo "<br>" . $prixAvantremise - $remise;

    // Exo 7:
// Vous avez un montant en euros que vous souhaitez convertir en dollars américains.
// Montant en euros
    $montantEuros = 100;
    // Taux de change : 1 euro = 1.18 dollars américains
    $tauxChange = 1.18;
    // Calculez le montant en dollars puis affichez le
    // Montant en euros
    
    $montantEuros = 100;

    // Taux de change : 1 euro = 1.18 dollars américains
    
    $tauxChange = 1.18;

    // Calculez le montant en dollars puis affichez le
    
    echo "<br>" . $montantEuros * $tauxChange;

    # EXERCICE:
# soit la variable age suivante
    $age = 18;
    #ecrire le code qui permet de verifier si age est superieur a 18
# si age est superieur ou egale a 18 afficher => majeur
# si age est inferieur a 18 afficher => mineur

if ( $age>= 18){
    echo "majeur";

}
else{
    echo"mineur";
}

    

    # EXERCICE:
// une annee bissextile est une annee divisible par 4 et pas par 100 ou divisible par 400
// ecrire un programme qui permet de verifier si une annee est bisextile ou pas
// si elle l'est affiche annee bissextile
// si non affiche annee pas bissextile
$annee = 2023;

if (( $annee  % 4 ==0 && $annee % 100 != 0 ) || $annee % 400 ==0) {
    echo"annee bissextile";

    
}
else{
    echo"annee pas bissextile";
}

    
    # EXERCICE:
#soit la variable nombre
#ecrire un programme qui permet de tester si elle est paire ou impaire
#si elle est paire afficher => le nombre est paire
#si non afficher => le npombre est impaire
    







    ?>
</body>

</html>