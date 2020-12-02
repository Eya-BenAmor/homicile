<?PHP
include "../Controller/rdvC.php";

$rdvC = new rdvC();
$listerdv = $rdvC->afficherrdv();

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
    
  
  <section class="pb-5 header text-center">
    <div class="container py-5 text-white">
       


        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body p-5">
                  
                        <!-- Responsive table -->
                        <div class="table-responsive">
                            <table class="table m-0">
                           
                                <thead>
                                    <tr>
                                 
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Spécialité</th>
                                        <th scope="col">Type</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?PHP
	
                                foreach ($listerdv as $rdv) {
                                  ?>
                                    <tr>
                                        <th scope="row"><?PHP echo $rdv['id']; ?></th>
                                        <td><?PHP echo $rdv['date']; ?> </td>
                                        <td><?PHP echo $rdv['specialite']; ?></td>
                                        <td><?PHP echo $rdv['type']; ?></td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                                
                                                <li class="list-inline-item">
                                               
                                                    <a href="Modifierrdv.php?id=<?PHP echo $rdv['id'];?>" name="id" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                </li>
                                               
                                                <li class="list-inline-item">
                                                <form method="POST" action="Supprimerrdv.php">
                                                    <button value=<?PHP echo $rdv['id']; ?> name="id"  class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    
                                                    </form>
                                                </li>
                                              
                                            </ul>
                                        </td>
                                    </tr>
                                    <?PHP
		}
		?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
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
