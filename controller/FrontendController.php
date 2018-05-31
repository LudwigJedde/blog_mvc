<?php
require_once('data/PostData.php');
require_once('data/CommentData.php');

class FrontendController
{
    private $postData;
    private $commentData;

    public function __construct()
    {
        $this->postData = new PostData();
        $this->commentData = new CommentData();
    }

    public function listPosts()
    {
        $posts = $this->postData->getPosts();
        require('view/accueil.php');
    }

    public function post()
    {
        $post = $this->postData->getPost($_GET['id']);
        $comments = $this->commentData->getComments($_GET['id']);
        $posts = $this->postData->getPosts();
        require('view/chapitre.php');
    }

    public function addComment($postId, $author, $comment)
    {
        $affectedLines = $this->commentData->postComment($postId, $author, $comment);
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }

    public function reportedComment($commentId)
    {
        $comment = $this->commentData->statusComment($commentId);
        header('location: index.php');
    }

    public function connexionForm()
    {
        $posts = $this->postData->getPosts();
        if (isset($_COOKIE["session"])){
            require('view/admin.php');
        }
        else{
            require('view/connexion.php');
        }
    }
}
