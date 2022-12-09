<?php
    // récupération des valeurs postées par le formulaire
    $loginSaisi = $_POST["login"] ; // Récupération du login saisi
    $emailSaisi = $_POST["email"] ; // Récupération de l'email saisi
    $pwdSaisi = $_POST["pwd"] ; // Récupération du mot de passe saisi

    // link à la base de données
    $link = mysqli_connect("127.0.0.1","root","","carshop");
    if ( ! $link ) { 
        die("link impossible : " . mysqli_error()); 
    }

    // Recherche dans la base du mot de passe correspondant au login saisi
    $codeSQL = "SELECT mdp FROM compte WHERE login='".$loginSaisi."' AND email='".$emailSaisi."'";

    // Exécution de la requete
    mysqli_set_charset($link,"utf8");
    $result = mysqli_query($link,$codeSQL);
    if ( ! $result) { 
        die ("Requete SQL invalide : " .mysqli_error()) ; 
    }

    // nombre de lignes produit par la requete
    $nbLignes = mysqli_num_rows($result) ;

    // TEST
    if ( $nbLignes==0 ){ 
        header('location:login.php') ; 
    }
    else {
        // on vérifie la coherence du mot de passe
        $row = mysqli_fetch_assoc($result) ;
        if ( $pwdSaisi == $row["mdp"] ) {
            // démarrage des session
            session_start();
            // affectation des variables de session
            $_SESSION["login"] = $loginSaisi;
            $_SESSION['autorise'] = 1 ;
            // redirection vers la page
            header('location:cuisine.php') ;
        }
        else {
            // redirection vers la page
            header('location:login.php') ;
        }
    }
    mysqli_close($link);
?>