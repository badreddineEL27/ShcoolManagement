
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/Bootstrap/css/bootstrap-style.css">
    <link rel="stylesheet" href="assets/css/style-bootstrap.css">
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <title>ISTAGADIR | ADMISSION</title>
    </head>
<body>
<!-- Top Menu 1 -->
<section class="ista-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row top-menu-top">
		<div class="accounts col-md-9 col-6">
				<li class="top_li"><span class="fa fa-phone"></span><a href="#tel">+212 5288-41439</a> </li>
				<li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="#email" class="mail"> istagadir@ofppt-edu.ma</a>	</li>
		</div>
		<div class="social-top col-md-3 col-6">
			<a href="#LogIn_page" class="btn btn-secondary btn-theme4">ESPACE STAGIAIRE</a>
		</div>
	</header>
</div>
</div>
</section>
<!--********************************************************************************************-->
<!-- //Top Menu 1 -->
<section class="ista-bootstrap-header">
<nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
    <a class="navbar-brand" href="index.php">
        <img src="assets/images/agaIs_logo.png" alt="ISTAGADIR" title="ISTAGADIR" style="height:60px;" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="OFPPT.php">OFPPT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Formation.php">Formation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" style="color: #ffc107;">Admissions</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        </ul>
        <form action="search-results.html" class="form-inline position-relative my-2 my-lg-0">
        <input class="form-control search" type="search" placeholder="Rechercher" aria-label="Search" required="">
        <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>
    </div>
    </div>
</nav>
</section>
<section class="ista-Admission-breadcrum">
<div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
    <h2>CANDIDATER</h2>
    <p><a href="index.php" style="color: #ffc107;">Accueil</a> &nbsp; / &nbsp; Admission</p>
    </div>
</div>
</section>
<!--********************************************************************************************-->
<!--*****************************************************************************************-->
<div class="container-fluid">
		<div class="row pt-2">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div class="bg-info text-center">
					<div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
						<h4>Formulaire de pré-inscription</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-md-12">
				<form action="inscription.php" method="POST" enctype="multipart/form-data">
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Prénom *</label>
								<input type="text" name="prenom" class="form-control" required placeholder="Prénom">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Nom *</label>
								<input type="text" name="nom" class="form-control" placeholder="Nom">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1" required>Adresse email *</label>
								<input type="email" name="email" placeholder="Adresse email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
						     	<label for="exampleInputPassword1" required>Téléphone *</label>
								<input type="tel" name="tel" class="form-control" placeholder="Téléphone" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">CIN *</label>
								<input type="text" name="cin" class="form-control" placeholder="CIN">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">CNE *</label>
								<input type="number" name="cne" class="form-control" required placeholder="CNE"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Pays d'origine *</label>
								<select class="browser-default custom-select" name="pays">
									<option >Maroc</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Ville *</label>
								<select class="browser-default custom-select" name="Ville">
									<option >Ville</option>
									
								</select>

							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Image *</label>
								<input type="file" name="profile_image" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Niveau d'études *</label>
								<select class="browser-default custom-select" name="Niveau_détudes">
									<option>Bac</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Branche du bac *</label>
								<select class="browser-default custom-select" name="bac">  
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Formation souhaitée * </label>
								<select class="browser-default custom-select" name="Formation">
									<option>-</option>
									
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Spécialité * </label>
								<select class="browser-default custom-select" name="Choix1">
									<option>-</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Sexe *</label>
								<select class="browser-default custom-select" name="Sexe">
									<option>-</option>
									<option value="Homme">Homme</option>
									<option value="Famme">Famme</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Date de naissance *</label>
							<input type="date" name="dateN" class="form-control">

						</div>
					</div>
					</div>
				</form>
		        <div class="text-right" style="font-color:white;">
					<input type="submit" name="send" value="Enregistrer" class="btn btn-theme2">
			</div>
			</div>
		</div>
</div>
</div>

<div class="ads">
    <img src="assets/images/1-3.jpg" alt="ADS" style="max-width: 100%; height: auto;">
</div>
<!--********************************************************************************************-->
<!-- grids block 5 -->
<section class="ista-footer-29-main">
    <div class="footer-29">
        <div class="container">
            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">Contact Us</h6>
                    <ul>
                        <li><p><span class="fa fa-map-marker"></span>Route de Marrakech BP 24/S Agadir, Maoc</p></li>
                        <li><a href="#tel"><span class="fa fa-phone"></span>+212 5288-41439</a></li>
                        <li><a href="#mail" class="mail"><span class="fa fa-envelope-open-o"></span> istagadir-mail@support.com</a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">ESPACE STAGIAIRE</h6>
                        <li><a href="contact.php">Formation Hybride</a></li>
                        <li><a href="contact.php">Trouver un stage</a></li>
                        <li><a href="contact.php">Entreprenariat</a></li>
                        <li><a href="contact.php">Programme d’Innovation Entrepreneuriale (PIE)</a></li>
                        <li><a href="contact.php">Foire aux questions</a></li>
                        <li><a href="contact.php">Règlement intérieur</a></li>
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">
                    <h6 class="footer-title-29">LETTRE D'INFORMATION</h6>
                    <form action="#" class="subscribe" method="post">
                    <input type="email" name="email" placeholder="Email" required="">
                    <button><span class="fa fa-envelope-o"></span></button>
                    </form>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13759.866870973223!2d-9.5851963!3d30.4370454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8dd0ffa41785e73d!2sInstitut%20Sup%C3%A9rieur%20de%20Technologie%20Appliqu%C3%A9e%20ISTA%20TADDART%20AGADIR%20(V*21ru%24No*21r)!5e0!3m2!1sfr!2sma!4v1645384028639!5m2!1sfr!2sma" width="400" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">ISTAGADIR</h6>
                        <li><a href="index.php" >Accueil</a></li>
                        <li><a href="OFPPT.php">OFPPT</a></li>
                        <li><a href="Formation.php">Formation</a></li>
                        <li><a href=""style="color: #ffc107;"> Admissions</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                <p class="copy-footer-29">© 2022 ISTAGADIR. All rights reserved | Designed by <a href="#In">EL KHADIR BADR</a></p>
                <ul class="list-btm-29">
                        <li><a href="#link">Privacy policy</a></li>
                        <li><a href="#link">Terms of service</a></li>
                        
                    </ul>
            </div>
        </div>
    </div>
    <!--********************************************************************************************-->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
    </button>
    <!--********************************************************************************************-->
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
        } else {
        document.getElementById("movetop").style.display = "none";
        }
    }
      // Lorsque l'utilisateur clique sur le bouton, faites défiler vers le haut du document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- /move top -->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- //footer-28 block -->
</section>
<script>
    $(function () {
    $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
    })
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for -->
<script>
    $(document).ready(function () {
    $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
        0: {
            items: 1,
            nav: false
        },
        480: {
            items: 1,
            nav: false
        },
        667: {
            items: 1,
            nav: true
        },
        1000: {
            items: 1,
            nav: true
        }
        }
    })
    })
</script>
  <!-- //script -->
</body>
</html>  