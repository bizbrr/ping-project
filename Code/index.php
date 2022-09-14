<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="css/style2.css" rel="stylesheet">
  </head>


<style> body{
    background-image: url("http://localhost/site_ping/images/background.jpg");}
</style>

<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">PING ESIGELEC</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Accueil <span class="sr-only"></span></a></li>
                    <li class="nav-item"><a href="authent.php" aria-current="page" class="nav-link text-uppercase font-weight-bold">Se connecter</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
<div class="container">
    <div class="pt-5 text-white">
        <header class="py-5">
            <h1 class="display-5">Bienvenue sur la plateforme de gestion des sujets PING</h1>
        </header>
        <div class="py-5 animate__animated animate__slideInLeft animate__delay-1s animate__slow lead text">Innovation, créativité, travail d’équipe, esprit d’entreprendre… Le projet ingénieur met en valeur
                les qualités des étudiants de l’ESIGELEC
        </div>
        <a href="https://www.esigelec.fr/fr/ping-les-etudiant-e-s-de-lesigelec-font-le-plein-de-projets" class="btn btn-primary btn-lg active btn1" role="button" aria-pressed="true">+ d'infos</a>
        <div class="py-5 animate__animated animate__slideInRight animate__delay-1s animate__slow lead text-left">Ce site pour permet de gérer vos sujets PING, de consulter leur statut et de les valider si vous êtes administrateur
    </div>
    </div>
</div>
</body>
<script>
 $(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
 
</script>