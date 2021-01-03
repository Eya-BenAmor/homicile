<!doctype html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" type="image/png" href="../../Table_style/images/icons/favicon.ico"/>
	<link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../../assets/css/main.css">
	
	<link rel="stylesheet" href="../../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
					
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../assets/img/user.jpg" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="indexadmin.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="ajouter_patient.php" class="active"><i class="lnr lnr-file-empty"></i> <span>Ajouter patient</span></a></li>
						<li><a href="ajouter_medecin.php" class=""><i class="lnr lnr-file-empty"></i> <span>Ajouter un médecin</span></a></li>
						
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="liste_patient.php" class="">Liste des patients</a></li>
									<li><a href="liste_medecin.php" class="">Liste des médecins</a></li>
									<li><a href="liste_RDV_admin.php" class="">Liste de rendez-vous</a></li>
									<li><a href="liste_dossier.php" class="">Liste des dossiers médicaux</a></li>
									
								</ul>
							</div>
						</li>
						<li><a href="../index.php" ><i class="lnr lnr-linearicons"></i> <span>Visiter le site </span></a></li>
					</ul>
				</nav>
			</div>
		</div>

	
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
		
			
			<div class="col-lg-12 text-center">
<form class="form-horizontal" action="verifier_ajout_patient.php" role="form" method="post">
    <h2>Ajouter un  patient </h2>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="firstName" placeholder="Nom" class="form-control" name="nom" autofocus>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="lastName" placeholder="Prénom" class="form-control" name="prénom" required>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="email" placeholder="Email" class="form-control" name= "email">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            
                   
                        <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control" >
                   
           
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="date" id="birthDate" name="dateNaissance" class="form-control" placeholder="Date de naissance">
        </div>
    </div>
    

    <div class="form-group">
	<div class="col-sm-12">
            <select  class="form-control" id="Genre" name="Genre" style="height: 30px ! important;"required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
			</select>
			</div>
        </div>
    
        
        <div class="form-group">
		<div class="col-sm-12">
            <select  class="form-control" id="groups" name="groups" style="height: 30px ! important;">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>

			</select>
			</div>
        </div>
        <div class="form-group">

<div class="col-sm-12">
    <input type="text" id="tel" name="tel" class="form-control" placeholder="Téléphone" pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}'>
</div>
</div>
	<button type="submit" name="signup-submit" class="btn btn-primary btn-block">Ajouter</button>
	</div>

</form>

</div></div>
		  <script src="../../vendor2/jquery/jquery.slim.min.js"></script>
		  <script src="../../vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
		
	<script src="../../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../../assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="../../assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
