<?PHP
session_start();
include_once "../Controller/rdvC.php";
include_once '../Controller/medecinC.php';
$medecinC = new medecinC();

$rdvC = new rdvC();
$listerdv = $rdvC->afficherrdv2($_SESSION['unserId']);



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>liste de rendez-vous</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/full-width-pics.css" rel="stylesheet">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha256-DOS9W6NR+NFe1fUhEE0PGKY/fubbUCnOfTje2JMDw3Y=" crossorigin="anonymous" />

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="../css/styleaff.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="imprimer.css" type="text/css" media="print" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_profil.css">
    <script src="../js/custom.js"></script>
</head>

<body>

  <!-- Navigation -->
  <body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" ><img src="../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php"> Accueil</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="#">Pharmacie</a>
            </li>
            <li class="nav-item">
         
            <a class="nav-link" href="déconnecter.php">Déconnecter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="py-5">

<div class="container">

    
<div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRj0sVdHUILZRoIEPpZsqFqaxKUU1KPE45kn2LcjB6WmcElCf-C&usqp=CAU" class="rounded-circle" alt="Avatar" style="width:150px">
                        <ul class="meta list list-unstyled">
                            <ul class="meta list list-unstyled">
                            <?php
                            if (isset($_SESSION['unserId'])) {
                                echo '<li class="name">'.$_SESSION['unserLastname'].' '. $_SESSION['unserFirstname'].'</li>';
                            }
                            ?>
                            </ul>

                        </div>
                    <nav class="side-menu">
                    <ul class="nav">
                        <li ><a href="coordonnees_patient.php"><span class="fa fa-user"></span> Profile</a></li> 
                        <li><a href="espace_patient.php"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                        <li ><a href="historique_patient.php"><span class="fas fa-history"></span>Rendez_vous passés</a></li>
                        <li class="active"><a href="liste_RDV.php"><span class="fas fa-house-user"></span> Rendez-vous en cours..</a></li>
                    </ul>
                   
                    </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Historique patient <span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title"> Ici vous trouvez la liste de vos rendez-vous en cours..</h3>
                            <div class="form-group avatar" style='width: 1000px;'>
     
                          
                            <div class="container-fluid">
				
        <div class="row">
          <div class="col-md-6">
            <!-- BASIC TABLE -->
            
            
              <div class="panel-body">
                <table class="table" style="background-color:white;">
                           
                                <thead>
                                    <tr>
                                 
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">type </th>
                                        <th scope="col">médecin</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?PHP
	
                                foreach ($listerdv as $rdv) {
                                  $liste2 = $medecinC->afficherM($rdv['idm']);
                                  foreach ($liste2 as $row_m) {
                                  ?>
                                    <tr>
                                        <th scope="row"><?PHP echo $rdv['id']; ?></th>
                                        <td><?PHP echo $rdv['dateti']; ?> </td>
                                        <td><?PHP echo $rdv['etat']; ?> </td>
                                      
<td><?PHP echo $row_m['nom']. ' ' .$row_m['prenom'] .' '.$row_m['specialite']; ?> </td>

                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                                
                                                <li class="list-inline-item">
                                               
                                                    <a href="Modifierrdv.php?id=<?PHP echo $rdv['id'];?>" name="id" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                </li>
                                                </td>
                                                <td> 
                                                <li class="list-inline-item">
                                                
                                                <a href="Supprimerrdv.php?id=<?PHP echo $rdv['id'];?>" name="id" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>                                                  
                                                </li>
                                              
                                            </ul>
                                        </td>
                                    </tr>
                                    <?PHP
                                  }
		}
		?>
    </tbody>
                              
                                               
</table>
								</div>
							</div>
								</div>	</div>	</div> </div>
 

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </section>
</body>

</html>
