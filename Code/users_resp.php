<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Espace responsable - PING Esigelec</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home_conn.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet">
</head>
<style> body{
    background-image: url("http://localhost/ping-web-site-zaibet-serine-bizandry/Code/images/background.jpg");
    }
</style>

<?php
include_once('.inc.php');
session_start();



mysqli_query($conn,"set names utf8") or die (mysqli_connect_error()); //gestion de l'affichage des caractères spéciaux


$sql = "SELECT * FROM authent_resp INNER JOIN resp_ping on id_resp_ping=id";

$resultat = mysqli_query($conn,$sql) or die('Erreur '.mysqli_connect_error());
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
                        <!-- <li class="nav-item"><a href="authent.php" aria-current="page" class="nav-link text-uppercase font-weight-bold">Se connecter</a></li> -->
                    </ul>
                </div>
                <a href="logout.php">Déconnexion</a>
            </div>
        </nav>
    </header>
     <!--end navbar -->
<div class="tab">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
            <div class="alert alert-success" role="alert">
            <?php
                    if(isset($_SESSION["username"])){
                    echo "Bonjour ".$_SESSION["username"].", vous êtes connecté";
                                
            ?>
            </div>
            <?php if(isset($_GET['modif'])) { 
                        if ($_GET['modif']==1) { ?>
                            <div class="alert alert-success" role="alert">
                                Responsable supprimé !
                            </div>
            <?php } } ?>
                    <h3 style="color:white; text-align:center; font-family: 'Poppins',sans-serif; margin-bottom:20px;">Liste des responsables</h3>
                    <a  href="users_tutor.php" class="btn btn-primary" style="margin-bottom:10px;">Gérer les comptes tuteurs</a>
                    
                    <div class="table-responsive tab-border">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Poste</th>
                                    <th>Entreprise</th>
                                    <th>Nom d'utilisateur</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                            <?php while($data = mysqli_fetch_array($resultat)) { 
                                ?>
                                <tr class="cell-1 bg-tab">
                                    <td style="color:white"><?php echo $data['id']; ?></td>
                                    <td style="color:white"><?php echo $data['nom']; ?></td>
                                    <td style="color:white"><?php echo $data['prenom']; ?></td>
                                    <td style="color:white"><?php echo $data['poste']; ?></td>
                                    <td style="color:white"><?php echo $data['entreprise']; ?></td>
                                    <td style="color:white"><?php echo $data['user_name']; ?></td>
                                    <td>
                                        <a  href="delete_resp.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>


<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>
</html>
<?php } else {
                header('Location: authent_admin.php?erreur=3');
            }  
?>
