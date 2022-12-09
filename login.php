<!DOCTYPE html>
<html>
    <head>
        <title>Exemple</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Formulaire de connexion :</h1>
        <form action="traitement-login.php" method="post">
            <label for="name">Nom :</label><br>
            <input type="text" name="login"><br>
            <label for="email">Adresse e-mail :</label><br>
            <input type="email" name="email"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" name="pwd"><br><br>
            <input type="submit" value="Se connecter">
        </form>
        <p>Pas encore de compte ? <a href="register.php">S'inscrire</a></p>
    </body>
</html>