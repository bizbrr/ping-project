<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>📂 Nouveau sujet</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/style_authent.css" rel="stylesheet">
   <!-- --><link href="css/style_subject_form.css" rel="stylesheet"> 
  </head>

<style> body{
    background-image: url("http://localhost/ping-web-site-zaibet-serine-bizandry/Code/images/background.jpg");}
</style>

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
                        <!-- <li class="nav-item"><a href="authent.php" aria-current="page" class="nav-link text-uppercase font-weight-bold">Se connecter</a></li> -->
                    </ul>
                </div>
                <?php
                if(isset($_SESSION['username'])) { ?>
                <a class="btn btn-danger" href="logout.php">Déconnexion</a>
                <?php } ?>
            </div>
        </nav>
    </header>
     <!--end navbar -->

     <?php if(isset($_GET['erreur'])) { 
  if ($_GET['erreur']==1) { ?>
            <div style="top: 80px;width: 80%;left: 5%;" class="alert alert-danger" role="alert">
            Assurez-vous que tous les champs obligatoires (*) sont bien remplis.
            </div>
<?php }} ?>

<?php

$id_tutor = $_SESSION["id_tutor"];

?>

<form style="height: 650px !important; width: 1000px !important; top: 65%;"action="create_subject.php" method="POST" enctype="multipart/form-data">
      <h3>Création de nouveau sujet de projet</h3>
      <h5>Compte tuteur</h5>
<div style="float:left;width: 450px !important;">
      <label for="subject_title">Saisissez le titre du projet</label>
      <input type="text" placeholder="Titre sujet Ping" name="titre_sujet" id="subject_title" class="input">

      <label for="subject_resume">Résumé du projet</label>
      
      <input type="text" placeholder="Résumé du projet" name="subject_resume" id="subject_resume" class="input">
      <!-- -->
      <label class="labelbutton" for="contactChoice1">Ressource nécessaire pour le projet</label>

      <input type="radio" class="radiobutton" id="contactChoice1" checked="checked" name="team_nb" value="1">
      <label  class="labelcontent" for="contactChoice1">Une équipe</label>

      <input type="radio" id="contactChoice2" name="team_nb" value="2">
      <label class="labelcontent" for="contactChoice2">Deux équipes</label> 

</div>
<div style="float:right;width: 450px !important;">
      <label for="avatar">Insérer une image :</label>

      <input type="file"
        id="avatar" name="avatar"
        accept="image/png, image/jpeg" value="<?php echo $img; ?>">

        <label for="avatar">Insérer un fichier :</label>

      <input type="file" id="file" name="pdf" accept="application/pdf" value="<?php echo $pdf; ?>">
      </input>

      <label class="labelbutton">Confidentiel</label> 
      <label class="switch">
        <input type="checkbox" id="slider" name="slider" value='true'>
        <span class="slider round"></span>
      </label>

</div>
      <button class="button">Soumettre</button>
</form>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.min.js"></script>
  </body>
</html>
