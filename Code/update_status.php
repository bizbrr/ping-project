<?php
//mise à jour du formuaire (modifications)
if (!empty($_POST)){
include_once('upload_files.php');
include_once('.inc.php');
foreach ($_POST as $name => $val) { 
    $_POST[$name] = mysqli_real_escape_string($conn, $val);
     }
if(isset($_POST['status'])){
    if ($_POST['status']=="Validé"){
        $id_status =  mysqli_real_escape_string($conn, 1);
    }else if ($_POST['status']=="Refusé"){
        $id_status =  mysqli_real_escape_string($conn, 3);
    }else {
        $id_status =  mysqli_real_escape_string($conn, 2);
    }
}
$remarque=$_POST['remarque'];
$id=$_POST['id'];


mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux
    $requete = "UPDATE subject set id_status='$id_status', rq_resp='$remarque' where id='$id'";
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_error($conn));
              
    }
    echo $requete;
    header('Location: home_conn_resp.php?modif=1');

    }
?>