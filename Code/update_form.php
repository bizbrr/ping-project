<?php

if (!empty($_GET)){

  //infos de log server pour conn
$servername = 'localhost';
$db_username = 'root';
$db_passord = 'root';
// connexion à la base de données
$conn = mysqli_connect($servername, $db_username, $db_passord,"site_ping");
$check = isset($_GET['slider']) ? 1 : 0;
//On vérifie la connexion
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    $requete = "UPDATE subject set image='".$_GET['avatar']."',doc_pdf='".$_GET['pdf']."',confidentiality='".$check."', team_nb='".$_GET['equipe']."' where title='".$_GET['titre_sujet']."'";
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_connect_error());
    }
    header('Location: home_conn.php?modif=1');
}

?>