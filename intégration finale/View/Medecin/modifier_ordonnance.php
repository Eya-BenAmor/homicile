<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Médecin</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../../Table_style/images/icons/favicon.ico"/>
    <!-- Bootstrap CSS -->
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
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">  
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
    
  
    <section class="pb-5 header text-center">
      <div class="container py-5 text-white">
       
      <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body p-5">  
   
<div class="container">
    <div class="view-account">
      <form class="form-horizontal" action="modif_ordonnance.php?id=<?PHP echo $_GET["id"];?>" name="id" role="form" method="post">
      <?php
                     
                     include_once '../../Controller/ordonnanceC.php';
                     $ordonnanceC = new ordonnanceC();
                     $liste = $ordonnanceC->afficherordonnance($_GET['id']);
foreach ($liste as $row) {

 

?>
                        <fieldset class="fieldset">
                        <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament1" placeholder=" Médicament 1 (obligatoire)" class="form-control" value="<?php echo $row['medicament1']; ?>" required >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj1"  placeholder="# fois par jour " class="form-control"value="<?php echo $row['nfj1']; ?>" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap1"   placeholder="av/ap repas " class="form-control" value="<?php echo $row['avap1']; ?>" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament2" placeholder=" Médicament 2 " class="form-control" value="<?php echo $row['medicament2']; ?>">
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj2"  placeholder="# fois par jour" class="form-control" value="<?php echo $row['nfj2']; ?>" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap2"   placeholder="av/ap repas " class="form-control" value="<?php echo $row['avap2']; ?>" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament3" placeholder=" Médicament 3 " class="form-control" value="<?php echo $row['medicament3']; ?>">
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj3"  placeholder="# fois par jour" class="form-control" value="<?php echo $row['nfj3']; ?>" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap3"   placeholder="av/ap repas" class="form-control" value="<?php echo $row['avap3']; ?>" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div style="margin-top:10px;">
                                  <textarea name="remarque" placeholder="Remarque...(obligatoire)" value="<?php echo $row['remarque']; ?>" required></textarea>
                                </div>
                                <button type="submit" name="submit-ordonnance" class="btn btn-primary btn-block" style="margin-top:10px;">Envoyer</button>
                            </form>  
                            <?php
        }
   
        ?>                         
                          </div>


                          </div></div></div></div></div>
                         
                          </div>
<body>
</div> 
</html>