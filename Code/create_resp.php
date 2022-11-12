<?php
include_once('.inc.php');
//infos table authent_tutor
$username = $_POST['username'];
$mail = $_POST['email'];
$password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

//infos table tutor
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$company = $_POST['company'];
$poste = $_POST['poste'];
$tutored_student = $_POST['tutored_student'];



if($name !== "" && $firstname !== "" && $company !== "" && $tutored_student !== "" && $username !== "" && $password !== "")
    {


    mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux


    //Vérifie que l'utilisateur n'existe pas encore
    $requete_verif_unique = "SELECT count(*) FROM authent_resp WHERE user_name = '$username'";
    $exec_requete_verif_unique = mysqli_query($conn, $requete_verif_unique);
    $reponse = mysqli_fetch_array($exec_requete_verif_unique);
    $count = $reponse['count(*)'];
    if(!$exec_requete_verif_unique){
        die('Erreur : ' .mysqli_connect_error());
    }

    if($count!=0) // nom d'utilisateur et mot de passe corrects
    {
        header('Location: signup.php?erreur=2'); // Un utilisateur est déjà associé à cet e-mail ou nom d'utilisateur. Veuillez utiliser un autre.
    }
    else
    {
        //ecriture à la table tutor
        $requete1 = "INSERT INTO resp_ping (nom, prenom, entreprise, poste) 
                    VALUES ('$name','$firstname','$company','$poste')";
        $exec_requete1 = mysqli_query($conn, $requete1);
        if(!$exec_requete1){
            die('Erreur : ' .mysqli_connect_error());
        }

        //recupère l'id du tutor précedemment ajouté
        $requete2 = "SELECT id FROM resp_ping WHERE nom = '$name' and prenom = '$firstname' and entreprise = '$company' and poste = '$poste'";
        $exec_requete2 = mysqli_query($conn, $requete2);
        $reponse = mysqli_fetch_array($exec_requete2);
        if(!$exec_requete2){
            die('Erreur : ' .mysqli_connect_error());
        }

        //ecriture à la table authent_tutor
        $requete3 = "INSERT INTO authent_resp (id_resp_ping, user_name, password) VALUES ('$reponse[0]','$username','$password')";
        $exec_requete3 = mysqli_query($conn, $requete3);
        if(!$exec_requete3){
            die('Erreur : ' .mysqli_connect_error());
        }
        $_SESSION['username'] = $username;
        header('Location: authent.php?confirm=1');
        var_dump($_GET['confirm']);
    }
}
else
{
    header('Location: signup.php?erreur=1'); // Veuillez compléter tout les champs
}
mysqli_close($conn);
?>