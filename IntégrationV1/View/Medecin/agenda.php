<?php
session_start();
include '../../Controller/patientC.php';

include '../../Controller/rdvC.php';
 
 $rdvC = new rdvC();
 $patientC = new patientC();
 
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Médecin</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../Table_style/images/icons/favicon.ico"/>
<!-- Custom styles for this template -->
<link href="../../css/full-width-pics.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../../css/swiper.min.css">
    <link rel="stylesheet" href="../../css/calendar.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>
  
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
            <a class="nav-link" href="#">Pharmacie</a>
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
                         <li class="active"><a href="agenda.php">Votre Agenda</a></li> 
                        <li ><a href="archive_medecin.php">Liste de rendez-vous</a></li> 
                        <li ><a href="liste.php"> Liste des ordonnances</a></li>
                        <li ><a href="maladieAfficher.php">Maladies</a></li> 
                        <li ><a href="dossierMedAfficher.php">Dossiers médicaux</a></li>
                       
                    </ul>
                    
                    
              
                    </div>
                
     
  
                <div class="content-panel">
                 
                            <div class="form-group avatar">

                                
                            <div class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl" ng-cloak>
        
                            <div date-picker
                              
                                picktime="true"
                                pickdate="true"
                                pickpast="false"
                                mondayfirst="false"
                                custom-message="Vous avez sélectionné"
                                selecteddate="ctrl.selected_date"
                                updatefn="ctrl.updateDate(newdate)">
                            
                                <div class="datepicker"
                                    ng-class="{
                                        'am': timeframe == 'am',
                                        'pm': timeframe == 'pm',
                                        'compact': compact
                                    }">
                
                        <div class="datepicker-header">
                        <div class="datepicker-title" ng-if="datepicker_title">{{ datepickerTitle }}</div>
                        <form class="form-horizontal" action="" method = "post">
                        <input class="form-control"  type="text" name="time" value="{{ selectedDay }} {{ monthNames[localdate.getMonth()] }} {{ localdate.getDate() }}, {{ localdate.getFullYear() }} at {{ edittime.formatted }}">
                            
                        
                       
                        <button class="form-control btn btn-primary"  type="submit" name="submit-rdv">Rechercher rendez-vous..</button>   
                        <ul>
       
       <?php
 
 
     
 if (isset($_POST['submit-rdv'])) {
     
     
 $liste = $rdvC->afficherrdv($_SESSION['DId']);
 
 foreach ($liste as $row) {
    
   if(strcmp($_POST['time'],$row['dateti'])==0)
   {
    $liste2 = $patientC->afficherP($row['idp']); 
    foreach ($liste2 as $row_p) {
        echo "Vous avez un rendez vous de la part de $row_p[prenom] $row_p[nom] pour une  $row[etat] ";
    }
   }
 
  
   
 }
 }
   ?> 
       </ul>
                        </form>
                        </div>
                        <div class="datepicker-calendar">
                            <div class="calendar-header">
                                <div class="goback" ng-click="moveBack()" ng-if="pickdate">
                                    <svg width="30" height="30">
                                        <path fill="none" stroke="#0DAD83" stroke-width="3" d="M19,6 l-9,9 l9,9"/>
                                    </svg>
                                </div>
                                <div class="current-month-container">{{ currentViewDate.getFullYear() }} {{ currentMonthName() }}</div>
                                <div class="goforward" ng-click="moveForward()" ng-if="pickdate">
                                    <svg width="30" height="30">
                                        <path fill="none" stroke="#0DAD83" stroke-width="3" d="M11,6 l9,9 l-9,9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="calendar-day-header">
                                <span ng-repeat="day in days" class="day-label">{{ day.short }}</span>
                            </div>
                            <div class="calendar-grid" ng-class="{false: 'no-hover'}[pickdate]">
                                <div
                                    ng-class="{'no-hover': !day.showday}"
                                    ng-repeat="day in month"
                                    class="datecontainer"
                                    ng-style="{'margin-left': calcOffset(day, $index)}"
                                    track by $index>
                                    <div class="datenumber" ng-class="{'day-selected': day.selected }" ng-click="selectDate(day)">
                                        {{ day.daydate }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timepicker" ng-if="picktime == 'true'">
                            <div ng-class="{'am': timeframe == 'am', 'pm': timeframe == 'pm' }">
                                <div class="timepicker-container-outer" selectedtime="time" timetravel>
                                    <div class="timepicker-container-inner">
                                        <div class="timeline-container" ng-mousedown="timeSelectStart($event)" sm-touchstart="timeSelectStart($event)">
                                            <div class="current-time">
                                                <div class="actual-time"> {{ time }}</div>
                                            </div>
                                            <div class="timeline">
                                            </div>
                                            <div class="hours-container">
                                                <div class="hour-mark" ng-repeat="hour in getHours() track by $index"></div>
                                            </div>
                                        </div>
                                        <div class="display-time">
                                            <div class="decrement-time" ng-click="adjustTime('decrease')">
                                                <svg width="24" height="24">
                                                    <path stroke="white" stroke-width="2" d="M8,12 h8"/>
                                                </svg>
                                            </div>
                                            <div class="time" ng-class="{'time-active': edittime.active}">
                                    <input type="text" class="time-input" ng-model="edittime.input" ng-keydown="changeInputTime($event)" ng-focus="edittime.active = true; edittime.digits = [];" ng-blur="edittime.active = false"/>
                                    <div class="formatted-time" >{{ edittime.formatted }}</div>
                            
                                    </div>
                                            <div class="increment-time" ng-click="adjustTime('increase')">
                                                <svg width="24" height="24">
                                                    <path stroke="white" stroke-width="2" d="M12,7 v10 M7,12 h10"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="am-pm-container">
                                            <div class="am-pm-button" ng-click="changetime('am');">am</div>
                                            <div class="am-pm-button" ng-click="changetime('pm');">pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js'></script>

    <script src="../../js/index.js"></script>
                        </fieldset>
                        <hr> 

                </div>
            </div>
        </section>
    </div>
</div>
</section> 
<script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>
</div> 
</html>