<?php
session_start();

include_once('upload_files.php');
include_once('.inc.php');
foreach ($_POST as $name => $val) { 
    $_POST[$name] = mysqli_real_escape_string($conn, $val);
 }
//infos table subject
$subject_title = $_POST['titre_sujet'];
$subject_resume = $_POST['subject_resume'];
$team_nb = $_POST['team_nb'];
if(isset($_POST['slider'])){
    $slider = $_POST['slider'];
}else if(!isset($_POST['slider'])){
    $slider='false'; 
}
$upload_atr_sql=mysqli_real_escape_string($conn,$upload_str);
$upload_pdf_sql=mysqli_real_escape_string($conn,$upload_pdf);

$id_tutor = $_SESSION["id_tutor"];

if($subject_title !== "" && $subject_resume !== "")
{


    mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    //ecriture à la table subject
    $requete1 = "INSERT INTO `subject` (`id_tutor`, `title`, `abstract`,`image`,`doc_pdf`, `confidentiality`, `team_nb`,`id_status`,  `date`)
     VALUES('$id_tutor','$subject_title','$subject_resume','$upload_atr_sql','$upload_pdf_sql','$slider','$team_nb','2',curdate())";
    $exec_requete1 = mysqli_query($conn, $requete1);
    if(!$exec_requete1){
        die('Erreur : ' .mysqli_error($conn));
    }
    header('Location: home_conn.php?modif=3');

}
else
{
    //header('Location: subject_form.php?erreur=1'); // Veuillez compléter tout les champs
}











?>