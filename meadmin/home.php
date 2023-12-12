<?php 
include "../setting/config.php";
session_start();
if(!$_SESSION['meadmin'])
{
	header("location:../meadmin/index.php");}else
{
	$adminname = $_SESSION['meadmin'];
	$meadmin_username = $ravi->meadmin_username($adminname);
	$meadmin_username_display = $meadmin_username->fetch_assoc();
	$meadmin_info= $meadmin_username_display['admin_username']; 
	$t_staff_type = $meadmin_username_display['t_staff_type'];
	$info = $ravi->teacher_info($adminname,$t_staff_type);
	$info_display = $info->fetch_assoc();
	
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Administrateur | ISTAGADIR</title>
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>

	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

</head>

<body>
	<div class="page-container">
		<div class="left-content">
			<div class="inner-content">
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
		
				<?php 
				
				
				
				$homepage = "home1";
				if(isset($_GET['ravi']))
				{
					$homepage = $_GET['ravi'];
				}
				include $homepage.".php";
				
				
						
				?>
				
				
				
				
				
				
				<!--footer section start-->
				<footer>
					<p>© 2022 ISTAGADIR. All rights reserved  | Developed by <a href="#" target="_blank">EL KHADIR BADR</a></p>
				</footer>
				<!--footer section end-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <img src="../students/images/Logo-ISTAG.png" alt="OFPPT" style="width: 120px;" ></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<a href="index.html"><img src="../students/images/pic3.jpg"></a>
				<a href="index.php"><span class=" name-caret">ADNAN ET-TAYEB</span></a>
				<p>Administrateur Système </p>
				<ul>
				    <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="index.html"><span>paramètres</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Stagiaires</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-information">Information des Stagiaires</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=add-student">Ajouter un Stagiaire</a></li>
							<li id="menu-academico-avaliacoes"><a href="calender.html">Supprimer un Stagiaire</a></li>

						</ul>
					</li>
				<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Absences</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-information">Information de Base de Donnée</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=add-table">Ajouter une Base de Donnée</a></li>
							<li id="menu-academico-avaliacoes"><a href="calender.html">Modifier une Base de Donnée</a></li>
							<li id="menu-academico-avaliacoes"><a href="calender.html">Supprimer une Base de Donnée</a></li>
						</ul>
					</li>
					
					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Formateurs</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						
					<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-information">Information des Formateurs</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-edit">Ajouter un Formateur</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=teacher-add">Modifier un Formateur</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-delete">Supprimer un Formateur</a></li>

						</ul>
					</li>
					
					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Parents</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="tabs.html">Informations parentales</a></li>
						</ul>
					</li>
					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Paramètres</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=general-information">Informations générales</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=edit-general-information">Modifier les informations générales</a></li>
						
						</ul>
					</li>
					<li id="menu-academico"><a href="#"><i class="lnr lnr-book"></i> <span>Liste</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="#">Examens</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=class-routine">Classe</a></li>
							<li id="menu-academico-boletim"><a href="404.html">Notification</a></li>
							<li id="menu-academico-boletim"><a href="sign.html">Sign up</a></li>
							<li id="menu-academico-boletim"><a href="profile.html">Profile</a></li>
						</ul>
					</li>
			
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>