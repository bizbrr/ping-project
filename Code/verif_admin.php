<?php

    
$username = $_POST['username'];
$password = $_POST['password'];

foreach ($_POST as $name => $val) {
    $_POST[$name] = mysqli_real_escape_string($conn, $val);
    }
    
session_start();
if(isset($username) && isset($password))
{
    include_once('.inc.php');
    mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux
    
    //On vérifie la connexion
    if(!$conn){
      die('Erreur : ' .mysqli_connect_error());
  }
    

    if($username !== "" && $password !== "")
    {
        // Récupère la clé de hachage
        $requete_hash = "SELECT password FROM admin where user_name = '$username'";
        $exec_requete_hash = mysqli_query($conn,$requete_hash);
        $reponse_hash      = mysqli_fetch_array($exec_requete_hash);
        if(!$exec_requete_hash){
            die('Erreur : ' .mysqli_error($conn));
        }

        //vérifie les infos de login
        $requete = "SELECT count(*) FROM admin where 
              user_name = '$username'";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        $username = $username;

        if($count !=0 && password_verify($password,$reponse_hash[0])==true) // nom d'utilisateur et mot de passe corrects
        {
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = 'admin';
            header('Location: alter_users.php?success=1');        
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
mysqli_close($conn); // fermer la connexion
?>