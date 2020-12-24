<?php 
session_start();
  include "../../Controller/MaladieC.php";
  include "../../Controller/PatientC.php";
  include "../../Controller/DossierMedC.php";

  $mC = new MaladieC();
  $pC = new patientC();
  $dmC = new DossierMedC();

  $dms = $dmC->getAllDossierMed();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Médecin</title>

  <!-- Bootstrap core CSS -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/full-width-pics.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../../Table_style/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../Table_style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../Table_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../Table_style/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../Table_style/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../Table_style/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../Table_style/css/util.css">
  <link rel="stylesheet" type="text/css" href="../../Table_style/css/main.css">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="../../css/swiper.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

<!-- Styles -->
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/style_profil.css">
<script src="../../js/custom.js"></script>

</head>
  <!-- Navigation -->
  <body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">>

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
          <a class="nav-link" href="#">Pharmacie</a> </li>
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
                  <li ><a href="coordonnees_medecin.php"><span class="fa fa-user"></span>Profil</a></li> 
                  <li ><a href="agenda.php">Votre Agenda</a></li> 
                      <li ><a href="archive_medecin.php">Liste de rendez-vous</a></li> 
                      <li ><a href="liste.php">Liste des ordonnances</a></li>
                      <li ><a href="maladieAfficher.php">Les maladies</a></li> 
                      <li class="active" ><a href="dossierMedAfficher.php">Dossiers médicaux</a></li>
                    
                  </ul>
                  
                  
            
                  </div>
              
              <div class="content-panel">
                  <h2 class="title">Affichage des dossiers médicaux<span class="pro-label label label-warning"></span></h2>
                 
                     

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      
      <a target="_blank" href="dossierMedAjouter.php">Ajouter</a>
      <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">Titre</th>
                <th class="column2">Patient</th>
                <th class="column2">Maladie</th>
                <th class="column3">Fichier</th>
                <th class="column3">Description</th>
                <th class="column5">Modifier</th>
                <th class="column6">Supprimer</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dms as $raw) { 
                $patient = $pC->getPatient($raw['patient_id']);
                $maladie = $mC->getMaladie($raw['maladie_id'])
              ?>
                <tr>
                  <td class="column1"> <?php echo $raw['titre']; ?> </td>
                  <td class="column2"> <?php echo $patient['nom'].' '.$patient['prenom']; ?> </td>
                  <td class="column2"> <?php echo $maladie['nom']; ?> </td>
                  <td class="column3"> <a target="_blank" href="src/<?php echo $raw['fichier_pdf']; ?>"> <?php echo $raw['fichier_pdf']; ?> </a> </td>
                  <td class="column3"> <?php echo $raw['description']; ?> </td>
                  <td class="column5"> <a href="DossierMedModifier.php?id=<?php echo $raw['id']; ?>">Modifier</a> </td>
                  <td class="column6"> <a href="DossierMedSupprimer.php?id=<?php echo $raw['id']; ?>">Supprimer</a> </td>  
                </tr>
              <?php } ?>
            </tbody>
      </table>
    </div>
  </section>

 

  

  
  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
