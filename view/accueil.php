<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Découvrez mon tout dernier roman : * Billet simple pour l'Alaska * au fil de son écriture "/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="public/nav.css">
    <link rel="stylesheet" href="public/margin.css">
    <link rel="stylesheet" href="public/contact.css">
    <link rel="stylesheet" href="public/style.css">
    <title>Jean Forteroche - Le Blog</title>
</head>
<body>

    <?php   include('template/nav.php');
            include('template/header.php');
    ?>

    <div class="box-article d-lg-flex mt-3 mt-md-5">

        <div class="liste-article p-3 p-md-4 w-100">
            <h2 class="text-center mb-4">Chapitres publiés :</h2>

            <table class="table table-dark">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Titre du chapitre publié :</th>
                        <th scope="col">Date de publication :</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($posts as $post)
                        {
                    ?>
                    <tr class="text-center">
                        <td><a href="index.php?action=post&amp;id=<?php
                            echo htmlspecialchars($post->getId()); ?>">
                            <?php echo htmlspecialchars($post->getTitle()); ?></a></td>
                        <td><?php echo htmlspecialchars($post->getDateCreated()); ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
