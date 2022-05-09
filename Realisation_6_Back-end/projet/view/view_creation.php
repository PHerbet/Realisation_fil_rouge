<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <!-- Account creation form-->
    <form action="connection" method="post">
        <label for="login">Login :</label>
            <input type="text" name="login" id="login">
        <label for="mail">E-mail :</label>
            <input type="mail" name="mail" id="mail">
        <label for="pass">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp">
        <label for="pass">Confirmation du mot de passe :</label>
            <input type="password" name="mdp2" id="mdp2">
        <label for="img">Image :</label>
            <input type="file" name="img" id="img">
        <input type="submit" name="inscription" value="Inscription">
        <a href="/projet/accueil">Connection</a>
    </form>
</body>
</html>