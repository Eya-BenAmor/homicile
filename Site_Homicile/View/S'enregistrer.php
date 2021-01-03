<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Inscription</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/full-width-pics.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="../Table_style/images/icons/favicon.ico"/>
<!-- Swiper CSS -->
<link rel="stylesheet" href="../css/swiper.min.css">

<!-- Styles -->
<link rel="stylesheet" href="../css/style3.css">
<script src="../js/custom.js"></script>

</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="Admin/page-login.php" ><img src="../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php"> Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connecter.php">Se Connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="S'enregistrer.php">S'enregistrer</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  
  <section class="py-5">
<form class="form-horizontal" action="verifierInscription.php" role="form" method="post">
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
    
        
        <div class="form-group">
            <select  class="form-control" id="groups" name="groups" style="height: 30px ! important;">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>

            </select>
        </div>
        <div class="form-group">

<div class="col-sm-12">
    <input type='tel'  placeholder=' 123-456-7890'  name='tel'  class="form-control" pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}' required >
</div>
</div>
    <button type="submit" name="signup-submit" class="btn btn-primary btn-block">S'enregister</button>
</form> 


<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
