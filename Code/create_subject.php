<?php
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

//infos de log server pour conn
$servername = 'localhost';
$db_username = 'root';
$db_passord = 'root';

// echo "subject title";
// var_dump($subject_title);
// echo "subject abstrac";
// var_dump($subject_abstract);
// echo "team_nb";
// var_dump($team_nb);
// echo "image";
// var_dump($image);
// echo "file";
// var_dump($file);
//  echo "slider";
//  var_dump($slider);

session_start();
$id_tutor = $_SESSION["id_tutor"];

if($subject_title !== "" && $subject_resume !== "")
{

    // connexion à la base de données
    $db = mysqli_connect($servername, $db_username, $db_passord,"site_ping");

    //On vérifie la connexion
    if(!$db){
        die('Erreur : ' .mysqli_connect_error());
    }

    mysqli_query($db,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux

    //ecriture à la table subject
    $requete1 = "INSERT INTO `subject` (`id_tutor`, `title`, `abstract`, `confidentiality`, `team_nb`,  `date`)
     VALUES('$id_tutor','$subject_title','$subject_resume','$slider','$team_nb',curdate())";
    $exec_requete1 = mysqli_query($db, $requete1);
    if(!$exec_requete1){
    die('Erreur : ' .mysqli_error($db));
    }
    header('Location: home_conn.php');
}
else
{
    header('Location: subject_form.php?erreur=1'); // Veuillez compléter tout les champs
}











?>