<?php
//affichage des données lors de l'édition d'un formulaire
if (!empty($_GET)){

include_once('.inc.php');

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    $requete = "SELECT * FROM subject where id='".$_GET['id']."'";
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_connect_error());
    }
    $reponse = mysqli_fetch_array($exec_requete);
    $titre=$reponse['title'];
    $abstract=$reponse['abstract'];
    $confidentiality=$reponse['confidentiality'];
    $equipe=$reponse['team_nb'];
    $img=$reponse['image'];
    $pdf=$reponse['doc_pdf'];
    $id_status=$response['id_status'];
}

?>