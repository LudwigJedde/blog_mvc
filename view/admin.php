<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="public/nav.css">
    <link rel="stylesheet" href="public/margin.css">
    <link rel="stylesheet" href="public/styleAdmin.css">
    <title>Administration</title>
</head>
<body>
    <?php include('template/nav.php'); ?>
    <h3 class="text-center margin-admin">Administration</h3>

    <div class="actionAdmin m-2 p-2 m-md-5 p-md-4 border table-dark rounded">
        <a href="index.php?action=newPost">créer un nouveau chapitre</a>
        <a href="index.php?action=updateList" class="d-block">modifier/supprimer un chapitre</a>
        <a href="index.php?action=reportedCommentList">gestion des commentaires</a>
    </div>

    <div class="m-5">
        <form action="index.php?action=disconnect" method="post" class="d-flex justify-content-center">
            <input class="btn btn-danger" type="submit" value="déconnexion"/>
        </form>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
