<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Venez découvrir mon tout dernier roman Billet simple pour l'Alaska, sous forme d'épisodes quotidiens !"/>
    <meta property="og:title" content="Forteroche Jean"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.ljweb.fr/projet4"/>
    <meta property="og:image" content="http://www.ljweb.fr/projet4/public/images/roman.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="public/nav.css">
    <link rel="stylesheet" href="public/formConnexion.css">
    <link rel="stylesheet" href="public/margin.css">
    <link rel="stylesheet" href="public/styleAdmin.css">
    <title>Connexion</title>
</head>
<body>

    <?php include('template/nav.php'); ?>

    <form action="index.php?action=connexion" method="post" class="form-signin margin">
        <img src="./public/images/admin.png" alt="Administrateur" width="100%"/>
        <h4 class="h3 mb-3 font-weight-normal text-center">Veuillez vous connecter pour accéder à l'administration :</h4>
        <label for="inputText">Login :</label>
        <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="votre nom" required >
        <label for="inputPassword">Mot de passe :</label>
        <input type="password" id="password" name="password"class="form-control" placeholder="votre mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block btn-warning" type="submit">Connexion</button>
    </form>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
