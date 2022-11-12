<?php
include_once('upload_files.php');
include_once('.inc.php');
//infos table subject
$subject_title = $_POST['titre_sujet'];
$subject_resume = $_POST['subject_resume'];
$team_nb = $_POST['team_nb'];
$image = $_POST['image'];
$file = $_POST['file'];
if(isset($_POST['slider'])){
    $slider = $_POST['slider'];
}else if(!isset($_POST['slider'])){
    $slider='false'; 
}


session_start();
$id_tutor = $_SESSION["id_tutor"];

if($subject_title !== "" && $subject_resume !== "")
{


    mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    //ecriture à la table subject
    $requete1 = "INSERT INTO `subject` (`id_tutor`, `title`, `abstract`, `confidentiality`, `team_nb`,  `date`)
     VALUES('$id_tutor','$subject_title','$subject_resume','$slider','$team_nb',curdate())";
    $exec_requete1 = mysqli_query($conn, $requete1);
    if(!$exec_requete1){
    die('Erreur : ' .mysqli_error($conn));
    }
    header('Location: home_conn.php');
}
else
{
    header('Location: subject_form.php?erreur=1'); // Veuillez compléter tout les champs
}











?>