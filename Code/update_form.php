<?php
//mise à jour du formuaire (modifications)
foreach ($_POST as $name => $val) {
     $_POST[$name] = mysqli_real_escape_string($conn, $val);
     }
if (!empty($_POST)){
include_once('upload_files.php');
include_once('.inc.php');
if(isset($_POST['slider'])){
    $slider = 'true';
}else if(!isset($_POST['slider'])){
    $slider='false'; 
}
$id=$_POST['id'];
$upload_atr_sql=mysqli_real_escape_string($conn,$upload_str);
$upload_pdf_sql=mysqli_real_escape_string($conn,$upload_pdf);

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux
    $requete = "UPDATE subject set title='".$_POST['titre_sujet']."', image='".$upload_atr_sql."',doc_pdf='".$upload_pdf_sql."',confidentiality='$slider', team_nb='".$_POST['equipe']."', abstract='".$_POST['subject_resume']."', date=curdate() where id='$id'";
    $exec_requete = mysqli_query($conn, $requete);
    
    if(!$exec_requete){
         die('Erreur : ' .mysqli_error($conn));
    }
    header('Location: home_conn.php?modif=1');

    }
?>