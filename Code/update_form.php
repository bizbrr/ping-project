<?php
//mise à jour du formuaire (modifications)
if (!empty($_GET)){

  //infos de log server pour conn
$servername = 'localhost';
$db_username = 'root';
$db_passord = 'root';
// connexion à la base de données
$conn = mysqli_connect($servername, $db_username, $db_passord,"site_ping");
if(isset($_GET['slider'])){
    $slider = 'true';
}else if(!isset($_GET['slider'])){
    $slider='false'; 
}
$id=$_GET['id'];
//On vérifie la connexion
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}

mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux
    $requete = "UPDATE subject set title='".$_GET['titre_sujet']."', image='".$_GET['avatar']."',doc_pdf='".$_GET['pdf']."',confidentiality='$slider', team_nb='".$_GET['equipe']."', date=curdate() where id='$id'";
    echo $requete;
    $exec_requete = mysqli_query($conn, $requete);
    if(!$exec_requete){
        die('Erreur : ' .mysqli_connect_error());
    }
    header('Location: home_conn.php?modif=1');

}

?>