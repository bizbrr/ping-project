<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db = mysql_connect('localhost', 'root', 'root');
    mysql_query("set names utf8") or die (mysql_error()); //gestion de l'affichage des caractères spéciaux
    mysql_select_db('site_ping',$db)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    //$username = mysql_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    //$password = mysql_real_escape_string($db,htmlspecialchars($_POST['password']));

    if($_POST['username'] !== "" && $_POST['password'] !== "")
    {
        $requete = 'SELECT count(*) FROM authent_tutor where 
              user_name = "'.$_POST['username'].'" and password = "'.$_POST['password'].'"';
        $exec_requete = mysql_query($requete);
        $reponse      = mysql_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        $username = $_POST['username'];
        if($count!=0) // nom d'utilisateur et mot de passe corrects
        {
           $_SESSION['username'] = $username;
           header('Location: home_conn.php');

           
        }
        else
        {
           header('Location: authent.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: authent.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: authent.php');
}
mysql_close($db); // fermer la connexion
?>