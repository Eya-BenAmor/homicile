
<?php
session_start();
 
include '../Controller/ordonnanceC.php';
                               
include '../Controller/patientC.php';

include '../Controller/rdvC.php';
 $ordonnanceC = new ordonnanceC();
 $rdvC = new rdvC();
 $patientC = new patientC();


 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>liste des ordonnances</title>

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
                    	<img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRU_tRT57Pq_fe8VZ0ef9ZdTp8iVqRryxhj3luucZ2EdeHZlDDh&usqp=CAU" class="rounded-circle" width="180" height="200" >
                        <ul class="meta list list-unstyled">
                          <?php
                            echo '<li class="name">'.$_SESSION['DLastname']." " .$_SESSION['DFirstname'].'</li>';
                            echo '<li class="name"> spécialité:' .$_SESSION['Dspecialite'].'</li>';
                            ?>
                        </ul>
                        </div>
                    <nav class="side-menu">
                    <ul class="nav">
                        <li ><a href="archive_medecin.php"><span class="fa fa-user"></span> Liste de rendez-vous</a></li> 
                        <li class="active"><a href="liste.php"><span class="fa fa-clock-o"></span> Liste des ordonnances</a></li>
                        <li ><a href="maladieAjouter.php"><span class="fa fa-user"></span>Ajouter une maladie</a></li> 
                        <li ><a href="dossierMedAfficher.php"><span class="fa fa-clock-o"></span>Dossiers médicaux</a></li>
                      
                      
                    </ul>
                    
                    
              
                  
                </div>
                <div class="content-panel">
                    <h2 class="title">Liste des ordonnances<span class="pro-label label label-warning"></span></h2>     <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title"> Ici vous trouvez la liste de vos ordonnances envoyées</h3>
                           
                          
                          
		
				<div class="container-fluid">
				
					<div class="row">
						<div class="col-md-6">
							<!-- BASIC TABLE -->
							
							
								<div class="panel-body">
									<table class="table" style="background-color:white;">
                            <thead>
                          
                                    <tr>
                                 
                                        <th scope="col">#</th>
                                        <th scope="col">patient</th>
                                        <th scope="col">médicament1</th>
                                        <th scope="col">nbf/jr</th>
                                        <th scope="col">av/ap</th>
                                        <th scope="col">médicament2</th>
                                        <th scope="col">nbf/jr</th>
                                        <th scope="col">av/ap</th>
                                        <th scope="col">médicament3</th>
                                        <th scope="col">nbf/jr</th>
                                        <th scope="col">av/ap</th>
                                        <th scope="col">remarque</th>
                                        <th ></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?PHP
	
    $i = 1;
                                       
    $remarque = "";
    $liste = $rdvC->afficherrdv($_SESSION['DId']);
foreach ($liste as $row) {

$idr = $row['id'];
$dater = $row['dateti'];
$etat = $row['etat'];

      $liste2 = $patientC->afficherP($row['idp']); 
foreach ($liste2 as $row_m) {

$nomM = $row_m['nom'];
$preM = $row_m['prenom'];
$liste3 = $ordonnanceC->afficherordonnance($idr); 


foreach ($liste3 as $row_o) {
    $id=$row_o['idr'];
  $med1 = $row_o['medicament1'];
  $med2 = $row_o['medicament2'];
  $med3 = $row_o['medicament3'];
  $nfj1 = $row_o['nfj1'];
  $nfj2 = $row_o['nfj2'];
  $nfj3 = $row_o['nfj3'];
  $avap1 = $row_o['avap1'];
  $avap2 = $row_o['avap2'];
  $avap3 = $row_o['avap3'];
  $remarque = $row_o['remarque'];
    
   
    
  
                                  ?>
                                    <tr>
                                        <th scope="row"><?PHP echo $id; ?> </th>
                                        <td><?PHP echo $preM.' '.$nomM; ?> </td>
                                       
                                       
                                        <td><?PHP echo $med1; ?> </td>
                                        <td><?PHP echo $nfj1; ?> </td>
                                        <td><?PHP echo $avap1; ?> </td>
                                        <td><?PHP echo $med2; ?> </td>
                                        <td><?PHP echo $nfj2; ?> </td>
                                        <td><?PHP echo $avap2; ?> </td>
                                        <td><?PHP echo $med3; ?> </td>
                                        <td><?PHP echo $nfj3; ?> </td>
                                        <td><?PHP echo $avap3; ?> </td>
                                        <td><?PHP echo $remarque; ?> </td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                                
                                                <li class="list-inline-item">
                                               
                                                    <a href="modifier_ordonnance.php?id=<?PHP echo $idr;?>" name="id" type="button"  ><span style="font-size:17px;cursor:pointer" onclick="openNav()">&#9998;</span></a>
                                                </li>
                                                </td>
                                               
                                                <td>
                                                <li class="list-inline-item">
                                                
                                                <a href="Supprimer_ordonnance.php?id=<?PHP echo $idr; ?>" name="id" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>                                                  
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php
                        }

}


}

?>
                                </tbody>
                              
                                </table>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>
     
      
 

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </section>
</body>

</html>
