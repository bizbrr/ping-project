<?php 
//infos de log server pour conn
$servername = 'localhost';
$db_username = 'root';
$db_passord = 'root';
// connexion à la base de données
$conn = mysqli_connect($servername, $db_username, $db_passord,"site_ping");

//On vérifie la connexion
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}

?>