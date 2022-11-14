<?php
//suppression d'un sujet à partir du tableau
if (!empty($_GET)){

include_once('.inc.php');

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    $requete = "DELETE FROM authent_tutor where id_tutor='".$_GET['id']."'";
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_connect_error());
    }
    header('Location: control_tutor.php?modif=2');
}

?>