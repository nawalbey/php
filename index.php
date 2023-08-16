<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $nom = "heng";
    $prenom = "Mic";
    $nomComplet = $prenom. " ".$nom;
    echo"<p> bonjour je suis ".$prenom." ". $nom. "<p>";
    //extration de sous chaine
    $phrase = " La programmation est amusante";
    $mot = substr($phrase, 3, 13);
    echo $mot;
    //remplace
    $texte = "les chats sont adorables ";
    $nouveauTexte = str_replace("chats" , "chien" , $texte);
    echo $nouveauTexte;
    
    $texte = "hello wordl";
    $minuscules = strtolower($texte);
    echo $minuscules. "<br>";
    $majuscules = strtoupper( $texte);
    echo $majuscules. "<br>";

    $list = "pomme, orange, banane";
    $tableau = explode ( "e", $liste); // resultat : [ "pomm", ",orang " , ", banan"]
    print_r($tableau);
    
    $tableau = ["pomme" , "orange", "banane"];
    $list = implode( " , " , $tableau);
    echo $list;

    
    
    $prenom = "John";

    $nom = "Doe";

    $nomComplet = `${prenom}. "". ${nom}`;

    echo "<p> bonjour je suis " . $prenom . " " . $nom . "</p>";

 

    // Longueur d'une chaine de caractère

    $texte = "bonjour";

    $longueur = strlen($texte); #Resultat = 7

   

    // Extraction de sous-chaine

    $phrase = "La programmation est amusante";

    $mot = substr($phrase, 3, 13); #ici on commence du P de programmation (0=L, 1=A , 2= " " , 3=P) jusqu'à 13;

    echo $mot;

 

    // Recherche de texte :

    $text = "Bonjour tout le monde";

    $position = strpos($text, "tout"); #Résultat : 8 (position du mot 'tout')

    echo "<p>" . $position . "</p>";

 

    //Remplacer des mots:

    $text = "Les chiens sont adorables";

    $nouveauText = str_replace("chiens", "chats", $text);

    echo $nouveauText;

 

    //Conversions MAJ/min :

   

    $text = "coucou comment ca va";

    //ToLowerCaser

    $minText = strtolower($text);

    echo "<p>" . $minText . "</p>";

    // TOUPPERCASE

    $majText = strtoupper($text);

    echo "<p>" . $majText . "</p>";

    // Capitalize

    $capitalizedText = ucwords($text);

    echo "<p>" . $capitalizedText . "</p>";

    // Capitalize pour le premier mot seulement

    $firstCapitalizedText = ucfirst($text);

    echo "<p>" . $firstCapitalizedText . "</p>";

 

    // Suppression des espaces :

    $text = " bonjour ";

    $textSansEspace = trim($text);

    echo $textSansEspace;

 

    // Conversion en tableau :

    $liste = "pomme,orange,banane";

    $tableau = explode(",", $liste); #resultat : ["pomme","orange","banane"]

    $tableau = explode("e", $liste); #resultat : ["pomm",",orang",",banan"]

   

    $listeDeux = "Cerise,aubergine,amaterazu,endive,idiote,ravioli";

    $tableau = explode("a", $listeDeux);

    print_r($tableau);

 

    // Rechercher dans une chaine de caractère:

    $hello = "bonjour tout le monde";

    $contientBonjour = strpos($hello, "bonjour") !== false; // Resultat = true / 1 = True , 0 = False

    echo $contientBonjour;
    
    $mavar = 10;
    if( isset($mavar)){
        echo '<p> existe bien </p>';
    } else {
    echo '<p> n existe pas du tout </p>';
    }
    
    ?>
</body>

</html>