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
    <title>gestion des commentaires</title>
</head>
<body>

    <?php include('template/nav.php'); ?>
    <h3 class="text-center margin-admin">commentaires signalés</h3>

    <?php

        foreach ($comment as $comment)
        {
    ?>
        <div class="comments m-2 p-2 m-md-5 p-md-4 border border-dark rounded">
            <h3> <?php echo htmlspecialchars($comment->getAuthor()); ?> </h3>
            <p> <?php echo htmlspecialchars($comment->getComment()); ?> </p>
            <p>publié le: <?php echo htmlspecialchars($comment->getDateComment()); ?></p>
            <form action="index.php?action=deleteComment&amp;id=<?php echo $comment->getId();?>" method="post">

                <div class="d-inline">
                    <input class="btn btn-primary" type="submit" value="supprimer"/>
                </div>
            </form>
            <form action="index.php?action=acceptComment&amp;id=<?php echo $comment->getId();?>" method="post" class="d-inline">
                <input class="btn btn-primary" type="submit" value="accepter"/>
            </form>

        </div>
    <?php
        }
    ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
