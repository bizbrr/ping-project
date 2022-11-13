<?php 
//id permettant de récupérer les données
if (isset($_GET['id'])){
  $id = $_GET['id'];
 } 
 include_once "select_form.php"; ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ConnexionAuth</title>
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
                        <li class="nav-item"><a href="authent.php" aria-current="page" class="nav-link text-uppercase font-weight-bold">Se connecter</a></li>
                    </ul>
                </div>
                <?php session_start();
                if(isset($_SESSION['username'])) { ?>
                <a class="btn btn-danger" href="logout.php">Déconnexion</a>
                <?php } ?>
            </div>
        </nav>
    </header>
     <!--end navbar -->

    <form method="post" style="height: 800px !important; width: 1000px !important; top: 65%;" action="update_status.php" enctype="multipart/form-data">
      <h3>Contrôler le projet</h3>
      <h5>Compte responsable</h5>
      <div style="float:left;width: 450px !important;">
      <label for="subject_title">Titre du sujet</label>
      <input type="text" placeholder="Titre sujet Ping" name="titre_sujet" id="subject_title" class="input_style" value=<?php echo $titre; ?> disabled>

      <label for="subject_resume">Résumé du projet</label>
      
      <input type="text" placeholder="Résumé du projet" name="subject_resume" id="subject_resume" class="input_style" value="<?php echo $abstract; ?>" disabled>
      <!-- -->
      <label class="labelbutton">Ressource nécessaire pour le projet</label>
      <label  class="labelcontent" for="contactChoice1">Une équipe</label>
      <?php if($equipe==1){ ?>
              <input type="radio" name="equipe" id="contactChoice1" value=1 checked/>
      <?php } else { ?>
              <input type="radio" name="equipe" id="contactChoice1" value=1 />
      <?php } ?>
      <label class="labelcontent" for="contactChoice2">Deux équipes</label>
      <?php if($equipe==2){ ?>
              <input type="radio" name="equipe" id="contactChoice2" value=2 checked/>
      <?php } else { ?>
              <input type="radio" name="equipe" id="contactChoice2" value=2 />
      <?php } ?>
</div>
<div style="float:right;width: 450px !important;">
      <label for="avatar">Insérer une image :</label>

      <input class="input_style" type="file"
        id="avatar" name="avatar"
        accept="image/png, image/jpeg" value="<?php echo $img; ?>">

        <label for="avatar">Insérer un fichier :</label>

      <input class="input_style" type="file" id="file" name="pdf" accept="application/pdf" value="<?php echo $pdf; ?>">
      </input>
      
      <label class="labelbutton">Confidentiel</label> 
      <label class="switch">
        <?php if ($confidentiality=="true"){ ?>
        <input type="checkbox" id="slider" name="slider" value="true" checked disabled>
      <?php } else { ?>
        <input type="checkbox" id="slider" name="slider" disabled><?php } ?>
        <span class="slider round"></span>
      </label>
      </div>
      <!-- Champs responsable -->

      <label class="">Statut du sujet :</label> 
      <select name="status" class="input_style">
        <option></option>
        <option value="Validé" style="color:black;" <?php if ($_GET['label_status'] == 'Validé') { echo 'selected'; } ?>>Validé</option>
        <option value="Refusé" style="color:black;" <?php if ($_GET['label_status'] == 'Refusé') { echo 'selected'; } ?>>Refusé</option>
      </select>
      <label for="remarque">Remarque du tuteur:</label>
      <textarea class="input_style" id="remarque" name="remarque" rows="4" cols="50"></textarea>
      <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">


      <button class="button" type="submit">Enregistrer le statut</button>
</form>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.min.js"></script>
  </body>
</html>
