<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentification responsable</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <link href="css/style_authent.css" rel="stylesheet">
  </head>

<style> 
  body{
    background-image: url("http://localhost/ping-web-site-zaibet-serine-bizandry/Code/images/background.jpg");
  }
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>
     <!--end navbar -->
    <div class="background"> 

    </div>

<?php if(isset($_GET['confirm'])) { 
      if ($_GET['confirm']==1) { ?>
        <div style="top: 80px;width: 80%;left: 5%;" class="alert alert-success" role="alert">
        Compte responsable créé avec succès
        </div>
<?php } }?> 
<?php if(isset($_GET['erreur'])) { 
  if ($_GET['erreur']==1) { ?>
            <div style="top: 80px;width: 80%;left: 5%;" class="alert alert-danger" role="alert">
                Nom d'utilisateur ou mot de passe incorrect
            </div>
<?php } elseif ($_GET['erreur']==2) { ?>
    <div style="top: 80px;width: 80%;left: 5%;" class="alert alert-danger" role="alert">
                Veuillez saisir votre nom d'utilisateur et mot de passe
    </div>
<?php } elseif ($_GET['erreur']==3) { ?>
    <div style="top: 80px;width: 80%;left: 5%;" class="alert alert-danger" role="alert">
                Vous devez vous connecter pour accéder à cette page !
    </div>
  <?php } } ?>

  <form action="verif_resp.php" method="POST">
      <h3>Connexion</h3>
      <h5>Accès responsable</h5>

      <label for="username">Nom d'utilisateur</label>
      <input type="text" placeholder="Nom d'utilisateur" name="username" id="username" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="password">Mot de passe</label>
      <input type="password" placeholder="Mot de passe" name="password" id="password" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <button type="submit" class="button">Connexion</button>
  </form>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.min.js"></script>
  </body>
</html>