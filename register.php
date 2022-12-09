<!DOCTYPE html>
<html>
    <head>
        <title>Exemple</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Formulaire d’inscription :</h1>
        <form action="traitement-register.php" method="post">
            <label for="login">Nom :</label><br>
            <input type="text" name="login"><br>
            <label for="email">Adresse e-mail :</label><br>
            <input type="email" name="email"><br>
            <label for="pwd">Mot de passe :</label><br>
            <input type="password" name="pwd"><br><br>
            <input type="submit" value="S'inscrire">
        </form>
        <p>Déjà un compte? <a href="login.php">Se connecter</a></p>
    </body>
</html>

