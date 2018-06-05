<?php
require_once('model/BaseData.php');
require_once('model/User.php');

class UserData extends BaseData
{
    public function connect($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $user = $req->fetch();

        return new User($user['id'], $user['pseudo'], $user['mot_de_passe'], $user['email']);
    }
}
