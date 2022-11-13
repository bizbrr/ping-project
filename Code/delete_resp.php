<?php
//suppression d'un sujet à partir du tableau
if (!empty($_GET)){

include_once('.inc.php');

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    $requete = "DELETE FROM authent_resp where id_resp_ping='".$_GET['id']."'";
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_connect_error());
    }
    $requete2 = "DELETE FROM resp_ping where id='".$_GET['id']."'";
    $exec_requete2 = mysqli_query($conn, $requete2);
    if(!$exec_requete2){
        die('Erreur : ' .mysqli_connect_error());
    }
    header('Location: users_resp.php?modif=1');
}

?>
