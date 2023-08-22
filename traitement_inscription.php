<?php

// Le reste de votre code PHP

if (isset($_POST['envoyer'])) {

    //récupération des données

    $nom = htmlspecialchars($_POST['name']);

    $email = htmlspecialchars($_POST['user_email']);

    $password = htmlspecialchars($_POST['password']);

    $confirmer = htmlspecialchars($_POST['confirmer']);



    if (empty($nom) || empty($email) || empty($confirmer) || empty($password)) {

        echo "Veuillez remplir tous les champs !";

    } else if ($password != $confirmer) {

        echo "<p> OUPS, LES MOTS DE PASSE NE CORRESPONDENT PAS</p>";

    } else {

        echo "<h1> Bienvenue " . $nom;

    }

}