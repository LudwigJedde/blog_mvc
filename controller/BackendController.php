<?php
require_once('model/PostData.php');
require_once('model/CommentData.php');
require_once('model/UserData.php');

class BackendController
{
    private $postData;
    private $commentData;
    private $userData;

    public function __construct()
    {
        $this->postData = new PostData;
        $this->commentData = new CommentData;
        $this->userData = new UserData;
    }

    public function connexion($pseudo, $password)
    {
        $user = $this->userData->connect($pseudo);
        $posts = $this->postData->getPosts();
        if (password_verify($password, $user->getPassword())){
            $cookieValue = 'connexion';
            setcookie("session", $cookieValue, time()+1200);
            header('Location: index.php?action=connexionForm');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function disconnect()
    {
        $cookieValue = 'connexion';
        setcookie("session", $cookieValue, time()-1200);
        header('Location: index.php');
    }

    public function newPost()
    {
        if (isset($_COOKIE["session"])){
            $posts = $this->postData->getPosts();
            require('view/addPost.php');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function addPost($titlePost, $contentPost)
    {
        if (isset($_COOKIE["session"])){
            $post = $this->postData->createPost($titlePost, $contentPost);
            if ($post === false){
                throw new Exception('Impossible de créer l\'article !');
            }
            else{
                header('Location: index.php');
            }
        }
        else{
            require('view/connexion.php');
        }
    }

    public function updateList()
    {
        if (isset($_COOKIE["session"])){
            $posts = $this->postData->getPosts();
            require('view/listPosts.php');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function postUpdate()
    {
        if (isset($_COOKIE["session"])){
            $post = $this->postData->getPost($_GET['id']);
            $posts = $this->postData->getPosts();
            require('view/updatePost.php');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function updateConfirmation($titlePost, $contentPost, $postId)
    {
        if (isset($_COOKIE["session"])){
            $post = $this->postData->updatePost($titlePost, $contentPost, $postId);
            header('Location: index.php?action=post&id=' . $postId);
        }
        else{
            require('view/connexion.php');
        }
    }

    public function deletePost($postId)
    {
        if (isset($_COOKIE["session"])){
            $post = $this->postData->deletePost($postId);
            header('Location: index.php');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function reportedList()
    {
        if (isset($_COOKIE["session"])){
            $comment = $this->commentData->commentList();
            $posts = $this->postData->getPosts();
            require('view/commentaires.php');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function deleteComments($commentId)
    {
        if (isset($_COOKIE["session"])){
            $comment = $this->commentData->deleteComment($commentId);
            header('Location: index.php?action=reportedCommentList');
        }
        else{
            require('view/connexion.php');
        }
    }

    public function acceptComments($commentId)
    {
        if (isset($_COOKIE["session"])){
            $comment = $this->commentData->acceptComment($commentId);
            header('location: index.php?action=reportedCommentList');
        }
        else{
            require('view/connexion.php');
        }
    }
}
