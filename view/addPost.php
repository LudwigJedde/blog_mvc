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
    <script src="script/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "#contentPost",
            language: "fr_FR",
        });
    </script>
    <title>Ajouter un chapitre</title>
</head>
<body>

    <?php include('template/nav.php'); ?>
    <h3 class="text-center margin-admin">Ajouter un chapitre :</h3>

    <div class="addPost m-2 p-2 m-md-5 p-md-5 border border-dark rounded">
        <form action="index.php?action=addPost" method="post">
            <div>
                <label for="titlePost">Titre du chapitre</label><br />
                <input type="text" id="titlePost" name="titlePost"/>
            </div>
            <div>
                <label for="contentPost">Contenu du chapitre</label><br />
                <textarea id="contentPost" name="contentPost"></textarea>
            </div>
            <div class="mt-3">
                <input class="btn btn-primary btn-success" type="submit" value="publier"/>
            </div>
        </form>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
