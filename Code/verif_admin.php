<?php

$username = $_POST['username'];
$password = $_POST['password'];

session_start();
if(isset($username) && isset($password))
{
    // connexion à la base de données
    $db = mysqli_connect('localhost', 'root', 'root','site_ping');
    mysqli_query($db,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux
    
    //On vérifie la connexion
    if(!$db){
      die('Erreur : ' .mysqli_connect_error());
  }
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    //$username = mysql_real_escape_string($db,htmlspecialchars($username)); 
    //$password = mysql_real_escape_string($db,htmlspecialchars($password));

    if($username !== "" && $password !== "")
    {
        // Récupère la clé de hachage
        $requete_hash = "SELECT password FROM admin where user_name = '$username'";
        $exec_requete_hash = mysqli_query($db,$requete_hash);
        $reponse_hash      = mysqli_fetch_array($exec_requete_hash);
        if(!$exec_requete_hash){
            die('Erreur : ' .mysqli_error($db));
        }

        //vérifie les infos de login
        $requete = "SELECT count(*) FROM admin where 
              user_name = '$username'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        $username = $username;

        if($count !=0 && password_verify($password,$reponse_hash[0])==true) // nom d'utilisateur et mot de passe corrects
        {
            $_SESSION['username'] = $username;
            //echo ("Connecté");
            header('Location: signup_resp.php');        
        }
        else
        {
           header('Location: authent_admin.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: authent_admin.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: authent_admin.php');
}
mysqli_close($db); // fermer la connexion
?>