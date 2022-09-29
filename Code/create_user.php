<?php

$username=$_POST['username'];
$mail=$_POST['email'];
$password=$_POST['mdp'];
// connexion à la base de données
    $db = mysql_connect('localhost', 'root', 'root');
    mysql_query("set names utf8") or die (mysql_error()); //gestion de l'affichage des caractères spéciaux
    mysql_select_db('site_ping',$db)
           or die('could not connect to database');
    

        $requete = "INSERT INTO authent_tutor (mail, user_name, password) VALUES ('$username','$mail','$password')";
        $exec_requete = mysql_query($requete);

?>