<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription responsable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="CSS/style2.css" rel="stylesheet">
    <link type="text/css" href="CSS/form.css" rel="stylesheet">
    <link href="CSS/style_authent.css" rel="stylesheet">
  </head>

<style> body{
    background-image: url("http://localhost/ping-web-site-zaibet-serine-bizandry/Code/images/background.jpg");}
</style>

  <body>
    <!-- navbar -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="index.php" class="navbar-brand text-uppercase font-weight-bold">PING ESIGELEC</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Accueil <span class="sr-only"></span></a></li>
                        <li class="nav-item"><a href="users_resp.php" aria-current="page" class="nav-link text-uppercase font-weight-bold">Gérer les comptes responsables</a></li>
                    </ul>
                </div>
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

<?php if(isset($_GET['erreur'])) { 
  if ($_GET['erreur']==2) { ?>
            <div style="top: 80px;width: 80%;left: 5%;" class="alert alert-danger" role="alert">
            Un utilisateur est déjà associé à cet e-mail ou nom d'utilisateur. Veuillez utiliser un autre.
            </div>
<?php }} ?>

    <form style="height: 700px !important; width: 1000px !important;margin-top:70px !important" action="create_resp.php" method="POST">
      <h3>Formulaire d'inscription</h3>
      <h5>Compte responsable</h5>
<div style="float:left;width: 450px !important;">
      <label for="email">Saisissez votre nom *</label>
      <input type="text" placeholder="Nom" name="name" id="name" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="email">Saisissez votre prénom *</label>
      <input type="text" placeholder="Prénom" name="firstname" id="firstname" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="company">Saisissez le nom de votre entreprise *</label>
      <input type="text" placeholder="Entreprise" name="company" id="company" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="poste">Saisissez votre poste au sein de l'entreprise</label>
      <input type="text" placeholder="Poste" name="poste" id="poste" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">
  </div>
  <div style="float:right;width: 450px !important;">
      <label for="tutored_student">Saisissez le nom l'étudiant tutoré</label>
      <input type="text" placeholder="Etudiant.e tutoré.e" name="tutored_student" id="tutored_student" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="email">Saisissez votre mail *</label>
      <input type="text" placeholder="Adresse E-mail" name="email" id="email" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="username">Choisissez un nom d'utilisateur *</label>
      <input type="text" placeholder="Nom d'utilisateur" name="username" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">

      <label for="password">Choisissez un mot de passe *</label>
      <input type="password" placeholder="Mot de passe" name="mdp" id="password" style="display: block;height: 50px;width: 100%;background-color: rgba(255,255,255,0.07);border-radius: 3px;padding: 0 10px;margin-top: 8px;font-size: 14px;font-weight: 300;">
  </div>
      <button class="button" style="margin-top:25px">Inscrire</button>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.min.js"></script>
  </body>
</html>