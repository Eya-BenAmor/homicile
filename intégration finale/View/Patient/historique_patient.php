<?php
session_start();

                             
                               include '../../Controller/ordonnanceC.php';
                               
                               include '../../Controller/medecinC.php';
                             
                               include '../../Controller/rdvC.php';
                                $ordonnanceC = new ordonnanceC();
                                $rdvC = new rdvC();
                                $medecinC = new medecinC();
                                $liste = $rdvC->afficherrdv2($_SESSION['unserId']);
                               
                             
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="imprimer.css" type="text/css" media="print" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../../Table_style/images/icons/favicon.ico"/>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../../css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_profil.css">
    <script src="../../js/custom.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 9px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">  

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" ><img src="../../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="../index.php"> Accueil</a>
          </li>
          
         
            <li class="nav-item">
         
            <a class="nav-link" href="../déconnecter.php">Déconnecter</a>
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
                        <li><a href="espace_patient.php"> Avoir rendez-vous</a></li>
                        <li class="active"><a href="historique_patient.php">Rendez_vous passés</a></li>
                        <li><a href="liste_RDV.php">Rendez-vous en cours..</a></li>
                    </ul>
                    
                    </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Historique patient <span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title"> Ici vous trouvez l'historique de toutes les rendez-vous que vous avez pris et les visites que vous avez fait au sein de notre hopital, ainsi que votre ordonnance !</h3>
                            <div class="form-group avatar" style='width: 1000px;'>
     

                           
                            <div class="container-fluid">
				
        <div class="row">
          <div class="col-md-6">
            <!-- BASIC TABLE -->
            
            
              <div class="panel-body">
                <table class="table" style="background-color:white;">
                           
                           <thead>
                                          <tr>
                                            <th>rendez-vous</th>
                                            <th>Date et heure</th>
                                            <th>Docteur</th>
                                            <th> remarque du médecin</th>
                                            <th> ordonnace </th>
                                          </tr>
                                        
                                          </thead>
                                <tbody>
                                <tr>
                                          <?php
                                          $i = 1;
                                       
                                          $remarque = "";
                                         
                                    foreach ($liste as $row) {
                                     
                                      $idr = $row['id'];
                                      $dater = $row['dateti'];
                                      $etat = $row['etat'];
                                      $liste2 = $medecinC->afficherM($row["idm"]);
                                  

                                    foreach ($liste2 as $row_m) {
                                     
                                      $nomM = $row_m['nom'];
                                      $preM = $row_m['prenom'];
                                      $liste3 = $ordonnanceC->afficherordonnance($idr);
                                  
                                    
                                    foreach ($liste3 as $row_o) {

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
                                        if ($remarque !== "") {
                                         
                                         
                                          echo "<td>".$i."</td>";
                                          echo "<td style='width: 30%;'>".$dater."</td>";
                                          echo "<td>". $preM." ". $nomM."</td>";
                                          echo "<td style='width: 30%;'>".$remarque."</td>";
                                          echo '<td style="width: 40%;"> <a href="afficher_ordonnance.php?id='.$idr.'" name="id" class="collapsible">ordonnace</a>
                                          <div class="content">';
                                          echo '<ol><li>' .$med1. "  "."<br>". $nfj1 ." fois par jour<br>".$avap1.'</li>';
                                          echo '<li>'.$med2. "  " ."<br>". $nfj2 ." fois par jour<br>".$avap2.'</li>';
                                          echo '<li>'.$med3. "  " ."<br>". $nfj3 ." fois par jour<br>".$avap3.'</li>';
                                          
                                          echo '</ol></tr>';
                                          $i += 1;
                                        }else{
                                          echo "<h2> Pas d'historique</h2>";
                                        }
                                        
                                      }
                                  
                                  }
                               
                                     
                                      }
                                 
                                  
                                ?>
                                 </tr>
                               </tbody>
                              
                             
                            </table>
           
            </div>
            </div>
       
</div>
                            </div>
                        </div>
                        </fieldset>
                    </form>
                    </div>





</section>
<script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>

</html>
