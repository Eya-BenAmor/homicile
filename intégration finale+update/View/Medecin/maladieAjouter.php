<?php 
session_start();
include "../../Controller/MaladieC.php";
include "../../Model/Maladie.php";
   if (isset($_GET) and isset($_GET['nom']) and isset($_GET['description']) ) {
    
    $mc = new MaladieC();

    $m = new Maladie(NULL,$_GET['nom'],$_GET['description']);
    $mc->ajouterMaladie($m);
    echo '<script type="text/javascript">alert("Maladie ajouter !")</script>';
    header("Location:maladieAfficher.php");
    
  } 

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
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../../Table_style/css/form.css">
<!-- 
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Nr9ADfAudWcyNC3cay_4Mxh35n56dOWNmBayE1wCPwsX8xeWbJI4DDyftqPl1B4lrdINv5wjjTFkE0q4FSajfXuELUCPr4-s_czyfIRgJQ750tcUHWArq2PZwKd6V_3z3k2aFiexdlcY-riJBnD50-FaLBJxsuvq9hZT3x-KRkbTu0SW3ggCoisg2eFxoYhsKbcbs8z0QspY_4u0DG8_6E-QIberIJ3L_ypDasjGZbxLBT99_GUNbQb3wIVCipzCvYh6UPVAoy5I5PB_Z_c6lrxbs-HpIE0IzN34y_d52uV66Wh0e4JNQQKEihEksRMT1BjnhfeMurIz72w3BPuI_FrkPAqbcQX_vlqzQza-kuK1A4rvNU3tNuGpdo9JcVDkcQKqGzCVtm0v3NWuJBX8h5vzzEz1GVBU1PrvW2Wy872OqWDHX7oIZPEgxOMwezREEV8yWPt0zGoTMGG2o6Prmw" charset="UTF-8"></script> --></head>
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

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="../Admin/page-login.php" ><img src="../../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
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
                      <li ><a href="archive_medecin.php"> Liste de rendez-vous</a></li> 
                      <li ><a href="liste.php"> Liste des ordonnances</a></li>
                      <li  class="active" ><a href="maladieAfficher.php">Les maladies</a></li> 
                      <li ><a href="dossierMedAfficher.php">Dossiers médicaux</a></li>
                    
                  </ul>
                  
                  
            
                  </div>
              
              <div class="content-panel">
                  <h2 class="title">Ajouter une maladie<span class="pro-label label label-warning"></span></h2>
                 
                   
  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <div class="form-style-2">
        
        <form method="get">
          <label for="nom">
            <span>Nom <span class="required">*</span></span>
            <input type="text" class="input-field" name="nom" value="" />
          </label>
          <label for="description">
            <span>Description <span class="required">*</span></span>
            <textarea name="description" class="textarea-field"></textarea>
          </label>

          <label><span> </span><input type="submit" value="Submit" /></label>
        </form>
      </div>
    </div>
  </section>

  <!-- Image element - set the background image for the header in the line below -->
  

  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
