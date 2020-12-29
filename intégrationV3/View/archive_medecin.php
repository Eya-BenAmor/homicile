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
    <title>Rendez-vous</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_profil.css">
    <script src="../js/custom.js"></script>



</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">>

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
            <a class="nav-link" href="#">Pharmacie</a> </li>
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
                        <li class="active"><a href=""><span class="fa fa-user"></span> Liste de rendez-vous</a></li> 
                        <li ><a href="liste.php"><span class="fa fa-clock-o"></span> Liste des ordonnances</a></li>
                        <li ><a href="maladieAfficher.php"><span class="fa fa-user"></span>Ajouter une maladie</a></li> 
                        <li ><a href="dossierMedAfficher.php"><span class="fa fa-clock-o"></span>Dossiers médicaux</a></li>
                      
                    </ul>
                    
                    
              
                    </div>
                
                <div class="content-panel">
                    <h2 class="title">Liste des rendez-vous<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="ordonnance.inc.php" role="form" method="post">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title" style="font-size:20px ;color:black;">Ici vous trouvez la liste des rendez-vous de vos patients ainsi que leurs informations nécessaires et vous pouvez leurs ajouter une ordonnance</h3>
                            <?php
                           
                           $liste = $rdvC->afficherrdv($_SESSION['DId']);
                                    foreach ($liste as $row) {
                                      
                                   
                                     
                                     
                                      $liste2 = $patientC->afficherP($row['idp']); 
                                    foreach ($liste2 as $row_p) {
                                      $liste3 = $ordonnanceC->afficherordonnance($row["id"]);
                                      $num= $liste3-> rowCount();
                                      if($num==0)
                                      {
                                      echo '<div class="form-group avatar"><button type="button" class="collapsible">'.$row_p['nom']." ".$row_p['prenom'].' rendez-vous '.$row['id'].' </button><div class="content">';
                                      
                                   
                                     
                                      echo '<p>Email : '.$row_p["email"]. '</p>';
                                      echo '<p>Genre : '.$row_p["genre"]. '</p>';
                                      echo '<p>Date de naissance : '.$row_p["Datenaissance"]. '</p>';
                                      echo '<p>Type de visite :'. $row["etat"] . '</p>';
                                      echo '<p>Date du rendez-vous : '.$row["dateti"].'</p>';
                                   
                                 
                                      echo '<a  href="ajouter_ordonnance.php?id='.$row["id"].'" name="id"" type="button"><span style="font-size:17px;cursor:pointer;color:green" onclick="openNav()">&#9998;</span><p style="color:green">ajouter ordonnance</p></a></div>';
                                  
                                      }
                                      else 
                                      {
                                        echo '<div class="form-group avatar"><button type="button" class="collapsible">'.$row_p['nom']." ".$row_p['prenom'].' rendez-vous '.$row['id'].' </button><div class="content">';
                                      
                                   
                                     
                                      echo '<p>Email : '.$row_p["email"]. '</p>';
                                      echo '<p>Genre : '.$row_p["genre"]. '</p>';
                                      echo '<p>Date de naissance : '.$row_p["Datenaissance"]. '</p>';
                                      echo '<p>Type de visite :'. $row["etat"] . '</p>';
                                      echo '<p>Date du rendez-vous : '.$row["dateti"].'</p>'; 
                                      echo "<p style='color: green;'> ordonnance ajoutée</p></div>";
                                      }
                                   
                                    }
                               
                              }
                           
                                 
                                   
                             
                              /*$liste3 = $ordonnanceC->afficherordonnance($row["id"]);
                              $num= $liste3-> rowCount();
                             
                                   if($num==0)
                                   {
                              echo '<a href="ajouter_ordonnance.php?id='.$row["id"].'" name="id"" type="button"><span style="font-size:17px;cursor:pointer" onclick="openNav()">&#9998;</span> ajouter ordonnance </a></div>';
                                   } else {echo 'erreur';}*/
                            ?>
                            
                                     
                                     
                                      
                          <div id="mySidenav" class="sidenav">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           

                                <div class="form-group" style="margin-top:5px;">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament1" placeholder=" Médicament 1 (obligatoire)" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj1"  placeholder="# fois par jour (obligatoire)" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap1"   placeholder="av/ap repas (obligatoire)" class="form-control" >
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
                                                    <input type="text" name="Médicament2" placeholder=" Médicament 2 " class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj2"  placeholder="# fois par jour" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap2"   placeholder="av/ap repas " class="form-control" >
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
                                                    <input type="text" name="Médicament3" placeholder=" Médicament 3 " class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj3"  placeholder="# fois par jour" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap3"   placeholder="av/ap repas" class="form-control" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div style="margin-top:10px;">
                                  <textarea name="remarque" placeholder="Remarque...(obligatoire)"></textarea>
                                </div>
                                <button type="submit" name="submit-ordonnance" class="btn btn-primary btn-block" style="margin-top:10px;">Envoyer</button>
                            </form>                           
                          </div>



                          <script>
                          function openNav() {
                            document.getElementById("mySidenav").style.width = "600px";
                          }

                          function closeNav() {
                            document.getElementById("mySidenav").style.width = "0";
                          }




                          var coll = document.getElementsByClassName("collapsible");
                          var i;

                          for (i = 0; i < coll.length; i++) {
                            coll[i].addEventListener("click", function() {
                              this.classList.toggle("active");
                              var content = this.nextElementSibling;
                              if (content.style.display === "block") {
                                content.style.display = "none";
                              } else {
                                content.style.display = "block";
                              }
                            });
                          }





                          (function() {
                            window.requestAnimFrame = (function(callback) {
                              return window.requestAnimationFrame ||
                                window.webkitRequestAnimationFrame ||
                                window.mozRequestAnimationFrame ||
                                window.oRequestAnimationFrame ||
                                window.msRequestAnimaitonFrame ||
                                function(callback) {
                                  window.setTimeout(callback, 1000 / 60);
                                };
                            })();

                            var canvas = document.getElementById("sig-canvas");
                            var ctx = canvas.getContext("2d");
                            ctx.strokeStyle = "#222222";
                            ctx.lineWidth = 4;

                            var drawing = false;
                            var mousePos = {
                              x: 0,
                              y: 0
                            };
                            var lastPos = mousePos;

                            canvas.addEventListener("mousedown", function(e) {
                              drawing = true;
                              lastPos = getMousePos(canvas, e);
                            }, false);

                            canvas.addEventListener("mouseup", function(e) {
                              drawing = false;
                            }, false);

                            canvas.addEventListener("mousemove", function(e) {
                              mousePos = getMousePos(canvas, e);
                            }, false);

                            // Add touch event support for mobile
                            canvas.addEventListener("touchstart", function(e) {

                            }, false);

                            canvas.addEventListener("touchmove", function(e) {
                              var touch = e.touches[0];
                              var me = new MouseEvent("mousemove", {
                                clientX: touch.clientX,
                                clientY: touch.clientY
                              });
                              canvas.dispatchEvent(me);
                            }, false);

                            canvas.addEventListener("touchstart", function(e) {
                              mousePos = getTouchPos(canvas, e);
                              var touch = e.touches[0];
                              var me = new MouseEvent("mousedown", {
                                clientX: touch.clientX,
                                clientY: touch.clientY
                              });
                              canvas.dispatchEvent(me);
                            }, false);

                            canvas.addEventListener("touchend", function(e) {
                              var me = new MouseEvent("mouseup", {});
                              canvas.dispatchEvent(me);
                            }, false);

                            function getMousePos(canvasDom, mouseEvent) {
                              var rect = canvasDom.getBoundingClientRect();
                              return {
                                x: mouseEvent.clientX - rect.left,
                                y: mouseEvent.clientY - rect.top
                              }
                            }

                            function getTouchPos(canvasDom, touchEvent) {
                              var rect = canvasDom.getBoundingClientRect();
                              return {
                                x: touchEvent.touches[0].clientX - rect.left,
                                y: touchEvent.touches[0].clientY - rect.top
                              }
                            }

                            function renderCanvas() {
                              if (drawing) {
                                ctx.moveTo(lastPos.x, lastPos.y);
                                ctx.lineTo(mousePos.x, mousePos.y);
                                ctx.stroke();
                                lastPos = mousePos;
                              }
                            }

                            // Prevent scrolling when touching the canvas
                            document.body.addEventListener("touchstart", function(e) {
                              if (e.target == canvas) {
                                e.preventDefault();
                              }
                            }, false);
                            document.body.addEventListener("touchend", function(e) {
                              if (e.target == canvas) {
                                e.preventDefault();
                              }
                            }, false);
                            document.body.addEventListener("touchmove", function(e) {
                              if (e.target == canvas) {
                                e.preventDefault();
                              }
                            }, false);

                            (function drawLoop() {
                              requestAnimFrame(drawLoop);
                              renderCanvas();
                            })();

                            function clearCanvas() {
                              canvas.width = canvas.width;
                            }

                            // Set up the UI
                            var sigText = document.getElementById("sig-dataUrl");
                            var sigImage = document.getElementById("sig-image");
                            var clearBtn = document.getElementById("sig-clearBtn");
                            var submitBtn = document.getElementById("sig-submitBtn");
                            clearBtn.addEventListener("click", function(e) {
                              clearCanvas();
                              sigText.innerHTML = "Data URL for your signature will go here!";
                              sigImage.setAttribute("src", "");
                            }, false);
                            submitBtn.addEventListener("click", function(e) {
                              var dataUrl = canvas.toDataURL();
                              sigText.innerHTML = dataUrl;
                              sigImage.setAttribute("src", dataUrl);
                            }, false);

                          })();
                          </script>
                          </div>
                          </section> 
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>

</html>