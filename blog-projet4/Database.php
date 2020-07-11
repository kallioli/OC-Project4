<?php

class Database {

    public function getConnection() {
        try{
            $connection = new PDO('mysql:host=localhost;dbname=blog_project4;charset=utf8', 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return 'Connexion OK';
        }
        //On lève une erreur si la connexion échoue
        catch(Exception $errorConnection)
        {
            die ('Erreur de connection :'.$errorConnection->getMessage());
        }
    }
}