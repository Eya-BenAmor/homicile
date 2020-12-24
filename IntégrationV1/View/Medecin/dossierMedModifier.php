<?php 
 session_start();
 include "../../Controller/MaladieC.php";
 include "../../Controller/PatientC.php";
 include "../../Controller/DossierMedC.php";
 include "../../Model/DossierMed.php";

  if (!isset($_GET['id'])) {
    header("Location:dossierMedAfficher.php");
  }

  $dmC = new DossierMedC();
  $dossierMed = $dmC->getDossierMed($_GET['id']);

  $mC = new MaladieC();
  $maladies = $mC->getAllMaladie();

  $pC = new patientC();
  $patients = $pC->getAllPatient();

   if (isset($_POST) and isset($_POST['maladie']) and isset($_POST['patient']) and isset($_POST['titre']) and isset($_POST['description']) ) {

    if(isset($_FILES['fileToUpload'])){
    
      $errors= array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size =$_FILES['fileToUpload']['size'];
      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
      $file_type=$_FILES['fileToUpload']['type'];
      // $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
      
      $extensions= array("jpeg","jpg","png","pdf");
      
      // if(in_array($file_ext,$extensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG, PNG or PDF file.";
      // }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
      
      // if(empty($errors)==true){
        move_uploaded_file($file_tmp,"src/".$file_name);
        $dm = new DossierMed($_GET['id'],$_POST['maladie'],$_POST['patient'],$_POST['titre'],$file_name,$_POST['description']);
        $dmC->modifierDossierMed($dm);

        echo '<script type="text/javascript">alert("Dossier Medicale modifier !")</script>';
        header("Location: dossierMedAfficher.php");
      // }
   }

    
    
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
                  <h2 class="title">Modifier un dossier médical<span class="pro-label label label-warning"></span></h2>
                 
                   
  <section class="py-5">
    <div class="container">
      <div class="form-style-2">
      
        <form method="post" enctype="multipart/form-data">
          <label for="nom">
            <span>Titre <span class="required">*</span></span>
            <input required type="text" class="input-field" name="titre" value="<?php echo $dossierMed['titre']; ?>" />
          </label>
          <label for="patient"><span>Patient</span>
            <select name="patient" class="select-field">
              <?php foreach ($patients as $p) { ?>
              <option <?php if ($p['id'] == $dossierMed['patient_id']) { echo "selected"; }?> value="<?php echo $p['id']; ?>"> <?php echo $p['nom'].' '.$p['prenom']; ?> </option>
              <?php } ?>
            </select>
           </label>
           <label for="maladie"><span>Maladie</span>
            <select name="maladie" class="select-field">
              <?php foreach ($maladies as $m) { ?>
              <option <?php if ($m['id'] == $dossierMed['maladie_id']) { echo "selected"; } ?> value="<?php echo $m['id']; ?>"> <?php echo $m['nom']; ?> </option>
              <?php } ?>
            </select>
           </label>
           <label for="fileToUpload">
            <span>Fichier PDF <span class="required">*</span></span>
            <input required type="file" class="input-field" id="fileToUpload" name="fileToUpload"/>
          </label>
          <label for="description">
            <span>Description <span class="required">*</span></span>
            <textarea required name="description" class="textarea-field"> <?php echo $dossierMed['description']; ?> </textarea>
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
