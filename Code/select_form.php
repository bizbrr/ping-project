<?php

if (!empty($_GET)){

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

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    $requete = "SELECT * FROM subject where title='".$_GET['titre_sujet']."'";
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_connect_error());
    }
    $reponse = mysqli_fetch_array($exec_requete);
    $confidentiality=$reponse['confidentiality'];
    $equipe=$reponse['team_nb'];
    $img=$reponse['image'];
    $pdf=$reponse['doc_pdf'];
}

?>