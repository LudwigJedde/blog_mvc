<?php
class BaseData
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8', 'root', '');
        return $db;
    }
}
