<?php

function connexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stocks";

    try {
        $PDO = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        return $PDO;
    } catch (PDOException $e) {
        print "La connexion au serveur a échoué : " . $e -> getMessage() . "<br/>";
        die;
    }
}