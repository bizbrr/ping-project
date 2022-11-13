<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home_conn.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="animation.js"></script>
</head>
<style> body{
    background-image: url("http://localhost/ping-web-site-zaibet-serine-bizandry/Code/images/background.jpg");
    }
</style>

<?php
include_once('.inc.php');
session_start();
mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux


?>



<body>
    <!-- navbar -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="index.php" class="navbar-brand text-uppercase font-weight-bold">PING ESIGELEC</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Accueil <span class="sr-only"></span></a></li>
                    </ul>
                </div>
                <?php if(isset($_SESSION['username'])) { ?>
                <a class="btn btn-danger" href="logout.php">Déconnexion</a>
                <?php } ?>
            </div>
        </nav>
    </header>
     <!--end navbar -->
     <h3 style="color:white; text-align:center; font-family: 'Poppins',sans-serif;margin-top:90px;">Choisissez le type de compte que vous voulez gérer :</h3>
<div style="display:flex;margin-left: 32%;margin-top: 5%;">
 <div class="card" style="width: 18rem;margin-right:15px;">
  <img class="card-img-top" src="images/student.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="margin-left: 50px;">Comptes tuteur</h5>
    <a href="users_tutor.php" class="btn btn-primary" style="margin-left:95px">Gérer</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/resp.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="margin-left: 25px;">Comptes responsable</h5>
    <a href="users_resp.php" class="btn btn-primary" style="margin-left:95px">Gérer</a>
  </div>
</div>
</div>