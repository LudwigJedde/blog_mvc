<?php
    $pseudo = 'ludwig';
    $mdp = password_hash("p4", PASSWORD_DEFAULT);
    $email = 'jeanforteroche@gmail.com';

    $db = new PDO('mysql:host=localhost;dbname=projet_blog;charset=utf8', 'root', '');
    $req = $db->prepare('INSERT INTO user (pseudo, mot_de_passe, email) VALUES(:pseudo, :mdp, :email)');
    $req->execute(array(
        'pseudo' => $pseudo,
        'mdp' => $mdp,
        'email' => $email
    ));

