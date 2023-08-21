<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['valider'])) {
        //recuperation des donnes
        $nom = htmlspecialchars($_POST['nom']);
        $mail = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // echo "$nom $mail $message";
    
        // echo"<pre>";
        // print_r($_FILLES);
        // echo"<pre>";
    
        //$_SERVER['DOCUMENT_ROOT'] pointe a la racine du server c a d le dossier principale
        $imgName = $_FILES['image']['name'];//nom de l'image
        $tmpName = $_FILES['image']['tmp_name'];//localisation temporaire sur le serceure

        $destination = $_SERVER['DOCUMENT_ROOT'].'/images/' .$imgName;//destination finale de mon image
        echo $destination;
        move_uploaded_file($tmpName, $destination);
    }
    ?>
</body>

</html>