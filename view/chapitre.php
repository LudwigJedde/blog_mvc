<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Venez découvrir mon tout dernier roman Billet simple pour l'Alaska, sous forme d'épisodes quotidiens !"/>
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
    <title><?php echo htmlspecialchars($post->getTitle());?></title>
</head>
<body>

    <?php   include('template/nav.php');
    ?>
    <br><br>
    <div class="post m-1 p-2 m-md-4 p-md-4">
        <h2 class="text-center mb-5"> <?php echo htmlspecialchars($post->getTitle()); ?> </h2>
        <p> <?php echo $post->getContent(); ?> </p>
    </div>

    <div class="addComment m-1 p-2 m-md-4 p-md-4">
        <h3 class="text-center m-2 m-md-5">Ajouter un commentaire</h3>
        <form class="border border-dark rounded p-4" action="index.php?action=addComment&amp;id=<?php echo $post->getId(); ?>" method="post">
            <div class="comment-input">
                <label for="author">Votre nom</label><br />
                <input class="form-control" type="text" id="author" name="author"/>
            </div>
            <div class="comment-input ">
                <label for="comment">Commentaire</label><br />
                <textarea class="form-control comment-height" id="comment" name="comment"></textarea>
            </div>
            <div class="comment-input ">
                <input class="btn btn-primary btn-warning" type="submit" value="envoyer"/>
            </div>
        </form>
    </div>

    <div class="comment m-1 p-2 m-md-4 p-md-4">
        <?php
            foreach ($comments as $comment)
            {
            ?>
            <div class="comments border border-dark rounded mb-4 p-4">
                <h3> <?php echo htmlspecialchars($comment->getAuthor()); ?> </h3>
                <p> <?php echo htmlspecialchars($comment->getComment()); ?> </p>
                <p>publié le: <?php echo htmlspecialchars($comment->getDateComment()); ?></p>
                <form action="index.php?action=reportComment&amp;id=<?php echo $comment->getId();?>" method="post">
                    <div>
                        <input class="btn btn-primary btn-danger" type="submit" value="signaler !"/>
                    </div>
                </form>
            </div>
            <?php
            }
        ?>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
