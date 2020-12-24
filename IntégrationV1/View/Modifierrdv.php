<?php
require "../Controller/rdvC.php";
include_once '../Model/rdv.php';

$rdvC=new rdvC();
$id=$_GET["id"];

$rendez_v=$rdvC->getbyId($id);


if(isset($_POST["date"])&& isset($_POST["specialite"])&& isset($_POST["type"]))
	{
		
		$date=$_POST["date"];
    $specialite=$_POST["specialite"];
    $type=$_POST["type"];
			
		$rdvC->modifierrdv($id,$date,$specialite,$type);
		header("location:liste_RDV.php");
	}
else
	{ 
	echo "Erreur";
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>prendre rendez-vous</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/full-width-pics.css" rel="stylesheet">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha256-DOS9W6NR+NFe1fUhEE0PGKY/fubbUCnOfTje2JMDw3Y=" crossorigin="anonymous" />

  <link rel="stylesheet" href="../css/style.css">
  <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main2.css" rel="stylesheet" media="all">
    <link href="../css/styleaff.css" rel="stylesheet" media="all">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" ><img src="../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php"> Revenir à la page d'accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rendez-vous.php"> <i class="fas fa-user-clock"></i> Prendre RDV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste_RDV.php"> <i class="fas fa-clock"></i> Liste RDV</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
  <section class="py-5">
    
   
   <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
               
                    <form action="" method="POST">
                    <div class="input-group">
                            <input class="input--style-3 js-datepicker"  name="id" type="number"  value="<?php echo $id; ?>" disabled  >
                           
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker"  name="date" type="text" placeholder="Nouvelle adresse" value="<?php echo $rendez_v->date; ?>" required >
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="specialite"  required >
                                    <option disabled="disabled" selected="selected">Nouvelle spécialité </option>
                                    <option>COVID_19</option>
                                    <option>Orthopédie</option>
                                    <option>Cardiologie</option>
                                    <option>Chirurgie</option>
                                    <option>Gynécologie</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                          <div class="rs-select2 js-select-simple select--no-search">
                              <select name="type"  required >
                                  <option disabled="disabled" selected="selected">Nouveau type</option>
                                  <option>visite de préparation</option>
                                  <option>visite de vérification</option>
                                
                              </select>
                              <div class="select-dropdown"></div>
                          </div>
                      </div>
                       
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Modifier</button>
                        </div>
                       
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

  
</section> 
  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">
        Besoin d'un RDV rapidement avec un professionnel de santé ?
        Homicile est une plateforme innovante qui vous permet  de prendre RDV en ligne gratuitement.
        Esprit 2020 projet web 2A18 </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>