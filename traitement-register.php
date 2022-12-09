
<?php
    // récupération des valeurs postées par le formulaire
    $loginSaisi = $_POST["login"] ; // Récupération du login saisi
    $emailSaisi = $_POST["email"] ; // Récupération de l'email saisi
    $pwdSaisi = $_POST["pwd"] ; // Récupération du mot de passe saisi
    // Connexion à la base de données
    $link = mysqli_connect("127.0.0.1","root","","carshop");
    if ( ! $link ) { 
        die("Connexion impossible : " . mysqli_error()); 
    }
    // Vérification de l'unicité du login et de l'adresse e-mail
    $requete = "SELECT email FROM compte WHERE email = '$emailSaisi'";
    mysqli_set_charset($link,"utf8");
    $result = mysqli_query($link, $requete);
    if (mysqli_num_rows($result) > 0) {
        // Le login ou l'adresse e-mail est déjà utilisé, on affiche une erreur
        header('Location:register.php');
    }
    else {
        // Le login et l'adresse e-mail sont uniques, on peut inscrire l'utilisateur
        $requette = "INSERT INTO compte (login, email, mdp) VALUES ('".$loginSaisi."', '".$emailSaisi."', '".$pwdSaisi."')";
        mysqli_query($link, $requette);

        // Connexion de l'utilisateur
        session_start();
        $_SESSION['login'] = $loginSaisi;
        header('Location:login.php');
    }
    mysqli_close($link);
?>