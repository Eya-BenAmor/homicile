
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homicile</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/full-width-pics.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="../css/swiper.min.css">

<!-- Styles -->
<link rel="stylesheet" href="../css/style3.css">

<script src="../js/custom.js"></script>
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
            <a class="nav-link" href="index.php"> Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rendez-vous.php">Se Connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="s'enregistrer.php">S'enregistrer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pharmacie</a>
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
                    
<form  action="../Controller/enregistrerC.php" role="form" method="post">
    <h2>S'enregister en tant que patient </h2>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="firstName" placeholder="Nom" class="form-control" name="nom" autofocus>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="lastName" placeholder="Prénom" class="form-control" name="prénom">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="email" placeholder="Email" class="form-control" name= "email">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="password" name="password" id="password" placeholder="Votre Mot de passe" class="form-control" >
                    </label>
                </div>
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="password" name="password-R" id="password-R" placeholder="Une deuxième fois..." class="form-control" >
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="date" id="birthDate" name="dateNaissance" class="form-control" placeholder="Date de naissance">
        </div>
    </div>
    

    <div class="form-group">
            <select  class="form-control" id="Genre" name="Genre" style="height: 30px ! important;">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>
    
    

    <button type="submit" name="signup-submit" >S'enregister</button>
</form> 
</div>
            </div>
        </div>
    </div>
   
  
</section> 
  
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>