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
    <link href="css/style_subject_form.css" rel="stylesheet">
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
            </div>
        </nav>
    </header>
     <!--end navbar -->

    <form style="height: 590px !important; width: 500px !important;">
      <h3>Formulaire d'inscription</h3>
      <h5>Compte tuteur</h5>

      <label for="email">Saisissez le titre du projet</label>
      <input type="text" placeholder="Titre sujet Ping" name="titre_sujet" id="subject_title">

      <label for="username">Résumé du projet</label>
      <input type="text" placeholder="Résumé du projet" id="subject_resume">

      <input type="radio" id="contactChoice1" name="contact" value="email">
      <label for="contactChoice1">Email</label>

      <input type="radio" id="contactChoice2" name="contact" value="telephone">
      <label for="contactChoice2">Téléphone</label>

    <label for="password">Choisissez un mot de passe</label>
    <input type="password" placeholder="Mot de passe" name="mdp" id="password">

      <button class="button">Inscription</button>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.min.js"></script>
  </body>
</html>
