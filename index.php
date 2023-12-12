<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-bootstrap.css">
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <title>ISTAGADIR</title>
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
			<a href="Students/index.php" class="btn btn-secondary btn-theme4">ESPACE STAGIAIRE</a>
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
      <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link"  href="" style="color: #ffc107;">Accueil</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="OFPPT.php">OFPPT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Formation.php">Formation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admission.php">Admissions</a>
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
<!--********************************************************************************************-->
<section class="ista-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
    <div class="owl-one owl-carousel owl-theme">
    <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>CMC de Tanger-Tetouan-Al Hoceima : avancement des travaux de 26.5%</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="https://www.ofppt.ma/fr/actualites/cmc-de-tanger-tetouan-al-hoceima-avancement-des-travaux-de-265">​EN SAVOIR PLUS</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Une Meilleure Formation Pour Une Meilleure Monde</h5>
                <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="Formation.php">​EN SAVOIR PLUS</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h3 id="05" style="color:white; font-size: 30px;">OFPPT : déploiement d’un Programme d’Excellence Chinois en E-Commerce Transfrontalier</h3>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="https://www.ofppt.ma/fr/actualites/ofppt-deploiement-dun-programme-dexcellence-chinois-en-e-commerce-transfrontalier">​EN SAVOIR PLUS</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>
</div>
<!--********************************************************************************************-->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
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
  <!-- /main-slider -->
</section>
<!--********************************************************************************************-->
<section class="ista-feature-3" id="features">
	<div class="grid top-bottom mb-lg-5 pb-lg-5">
		<div class="container">
			<div class="middle-section grid-column text-center">
				<div class="three-grids-columns">
					<span class="fa fa-laptop"></span>
					<h4>Online Courses & Certification</h4>
					<p>Axée sur l’approche par compétences, l’Ecole Polytechnique d’Agadir a mis en place plusieurs centres de certifications des compétences. C’est un moyen de hausser le niveau de compétence de nos étudiants...</p>
					<a href="#Certification & Courses Online" class="btn btn-secondary btn-theme3 mt-4">​En Savoir Plus</a>
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-users"></span>
					<h4>BROCHURE</h4>
					<p>ISTA - Agadir forme des Technicien Spécialisé polyvalents dotés de solides compétences scientifiques et technologiques. Découvrez notre large gamme de programmes diplômants sur notre brochure institutionnelle.</p>
					<a href="#Admission" class="btn btn-secondary btn-theme3 mt-4">Télécharger la brochure</a>
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-book"></span>
					<h4>La bibliothèque Numérique</h4>
					<p>Engagé sur tous les fronts de la recherche d’excellence afin de permettre à ses stagiaires et formateurs de disposer des meilleures ressources qui les accompagneront dans le cadre de leurs formations...</p>
					<a href="https://ofppt.scholarvox.com/splash" class="btn btn-secondary btn-theme3 mt-4">​En Savoir Plus</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--********************************************************************************************-->
<!-- features-4 block -->
<section class="ista-index1" id="about">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-6 pr-lg-5">
          <h5 class="editContent">Candidature</h5>
					<h6 class="editContent">Les inscriptions sont ouvertes</h6>
        </br>
					<p class="more-gap editContent">Nous donnons à nos stagiaires une formation de qualité et 
            des expériences qui les préparent au succès dans leurs carrières. 
            Nous les aidons aussi à découvrir un domaine 
            qui les passionne et à oser le diriger.</p>
							<a class="btn btn-secondary btn-theme2 mt-3" href="admission.php"> Je candidate</a>
				</div>
				<div class="column ccont-left col-lg-6">
					<img src="assets/images/POL_2220-1-768x432-1.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--********************************************************************************************-->
<!-- features-4 block -->
<section class="services-12" id="course">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				<div class="column1">
					<div class="heading">
						<h3 class="head text-white">Développement Digital</h3>
						<h4>INSCRIPTIONS OUVERTES</h4>
						<p class="my-3 text-white">La filière Développement Digital permet de former des informaticiens capables de maîtriser 
              des connaissances et des compétences liées au matériel qu’au logiciel. 
              Ces derniers sont amenés à étudier des problématiques et à y trouver des solutions efficaces, 
              performantes, rentables et socialement acceptables. En considérant l’aspect matériel et l’aspect logiciel, 
              l’informaticien veille à la conception et à l’implantation de systèmes servant à recevoir, 
              stocker, traiter, transmettre, présenter et utiliser l’information.</p>
					</div>
					</div>
					<div class="column2">
						<a class="btn btn-secondary btn-theme2 mt-3" href="admission.php"> JE M'INSCRIS</a>
					</div>
			</div>
		</div>
	</div>
</section>
<!--********************************************************************************************-->
<section class="ista-features-8">
      <div class="features py-5" id="services">
			<div class="container py-md-3">
			<div class="fea-gd-vv text-center row">
				<div class="float-top col-lg-4 col-md-6">	
							<a href=""><img src="assets/images/certifications-polytechnique-agadir-768x432-1-1.jpg" class="img-responsive" alt=""></a>
							<div class="float-lt feature-gd">	
									<h3><a href="">Certifications</a> </h3>
										<p>Axée sur l’approche par compétences, l’Institut Spécialisé de Technologie Appliquée - Agadir a mis en place plusieurs centres de certifications des compétences. C’est un moyen de hausser le niveau de compétence de nos étudiants et de le promouvoir à l’échelle international...</p>
						</div>
      </div>
				<div class="float-top col-lg-4 col-md-6 mt-md-0 mt-5">	
							<a href=""><img src="assets/images/pedagogie-768x432-1.jpg" class="img-responsive" alt=""></a>
							<div class="float-lt feature-gd">	
									<h3><a href="">Stage et carrière</a> </h3>
									<p> Le service Stages et Carrières assure le lien entre nos stageraires et les entreprises. Il a une double mission : permettre à l’entreprise de disposer d’une banque de stagiaires opérant dans différents domaines, et encadrer le stageraire dans sa démarche de recherche de stage ou d’emploi...</p>
							</div>
				</div>
						<div class="float-top col-lg-4 col-md-6 mt-lg-0 mt-5">	
								<a href=""><img src="assets/images/cycle-prepa-768x432-1.jpg" class="img-responsive" alt=""></a>
								<div class="float-lt feature-gd">	
										<h3><a href=""> LP après Bac+2</a> </h3>
										<p> La licence professionnelle est une formation qui dure une année, dans laquelle les étudiants sont obligés de passer quelques semaines en stage dans une société ou un établissement qui leur offre la possibilité de mettre en pratique toutes les connaissances qu’ils ont acquises durant leur formation.... </p>
								</div>
				</div>
  </div>
  </div>
</div>
</section>
<!--********************************************************************************************-->
<!--  form-12 -->
<section class="ista-form-12">
		<div class="form-12-content py-5" id="services">
			<div class="container py-md-3">
				<div class="grid grid-column-2 py-md-5">
					<div class="column1">
						<h4 class="tagline">TROUVER UNE FORMATION</h4>
							<form action="/" method="Get">
								<div class="">
									<input type="text" name="name" class="form-input" placeholder="Mot-clé">
								</div>
								<div class="">
									<select id="sel1">
										<option>--Choisir--</option>
										<option>Commerce et Gestion</option>
										<option>Batiment et Travaux Publics</option>
										<option>Digital & Intelligence Artificielle</option>
										<option>Automobile</option>
                    <option>Audiovisuel et Cinéma</option>
									</select>
								</div>
								<button type="submit" class="btn btn-secondary btn-theme2">FILTRER</button>
							</form>
						</div>
						<div class="column2">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-6">
								<a href="#formation"><div class="courses-item">
									<span class="fa fa-male"></span>
									<p>Management</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6">
								<a href="#formation"><div class="courses-item">
									<span class="fa fa-suitcase"></span>
									<p>Finance</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
								<a href="#formation"><div class="courses-item">
									<span class="fa fa-code"></span>
									<p>Web Dev</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
								<a href="#formation"><div class="courses-item">
									<span class="fa fa-flask"></span>
									<p>Science</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="#formation"><div class="courses-item mt-2">
									<span class="fa fa-money"></span>
									<p>Marketing</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="#formation"><div class="courses-item mt-2">
									<span class="fa fa-gg"></span>
									<p>AI</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="#formation"><div class="courses-item mt-2">
									<span class="fa fa-desktop"></span>
									<p>Computing</p>
								</div></a>
							</div>
							<div class="col-md-3 col-sm-6 col-6 mt-4">
								<a href="#formation"><div class="courses-item mt-2">
									<span class="fa fa-mouse-pointer"></span>
									<p>Web Design</p>
								</div></a>
							</div>
						</div>
						</div>
				</div>
			</div>
		</div>
	</section>
  <!--********************************************************************************************-->
<!-- specifications -->
    <section class="ista-index2">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
              <div class="row main-cont-wthree-fea">
                    <div class="col-lg-3 col-sm-6">
                        <div class="grids-speci1">
                            <h3 class="title-spe">+100</h3>
                            <p>FORMATEURS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">+10</h3>
                            <p>FORMATIONS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  mt-lg-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">+200</h3>
                            <p>ONLINE<br>COURSE</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">+1000</h3>
                            <p>STAGIAIRES<br>INSCRITS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--********************************************************************************************-->
<!-- customers4 block -->
<section class="ista-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">
    <div class="section-title align-center row">
      <div class="item-top col-md-6 pr-md-5">
        <div class="heading">
          <h3 class="head text-white">TÉMOIGNAGES</h3>
          <p class="my-3 head text-white">« Lauréat de la promotion 2017 en Informatique et réseaux , je suis très fier d’appartenir à
            la grande famille ISTAGADIR. J’ai été très satisfait du déroulement de mes années d’études : c’est une formation
            solide, polyvalente qui apporte autant en pratique qu’en théorique. Durant mes deux années d’études à l’ISTAGADIR,
            j’ai pu profiter de la qualité du corps professoral qui m’a encadré et aidé à améliorer mes compétences
            personnelles et professionnelles. Grâce à la qualité de ma formation et mes acquis, j’ai pu atteindre un poste
            de technicien support IT au sein de la grande multinationale IBM. »</p>
            <p class="my-3 head text-white"> « La formation au sein de lInstitut Spécialisé de Technologie Appliquée - Agadir, est complète et polyvalente, assurée
              par des ingénieurs et professeurs compétents et soucieux d’apporter des encadrements et formations de qualité. Elle
              représente par ailleurs un moyen d’accès au marché du travail, qui est en constante recherche de profile ayant
              réalisés au cours même des études. »</p>
          </div>
    </div>
          <div class="item-top col-md-6 mt-md-0 mt-4">
            <div class="item text-center">
            <div class="imgTitle">
              <img src="assets/images/c3.jpg" class="img-responsive" alt="" />
              </div>
              <h6 class="mt-3">Amal Ahmaadi</h6>
              <p class="">Stagiaire</p>
              <p>Ici, j’ai appris énormément de choses grâce au corps enseignant. Chaque formateur possède une grande capacité
                d’écoute. Grâce à eux, je n’ai jamais baissé les bras. Je considère l’ISTAGADIR comme ma deuxième famille,
                car pendant 2 ans j’ai été considérée comme une personne à part entière et non comme un simple dossier scolaire.
              </p>
          </div>
        </div>
    </div>
  </div>
  </div>
</section>
<!--********************************************************************************************-->
<section class="ista-price-2" id="news">
    <div class="price-main py-5">
        <div class="container py-md-3">
            <div class="pricing-style-w3ls row py-md-5">
              <div class="pricing-chart col-lg-6">
                <h3 class=""> Actualités</h3>
                <div class="tatest-top mt-md-5 mt-4">
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                    <div class="column-6">
                                            <img src="assets/images/choiseul.jpg" alt="" class="img-fluid">
                                        </div>
                                <div class="column1">
                                    <div class="job-info">
                                        <h6 class="pricehead"><a href="https://www.ofppt.ma/fr/actualites/palmares-des-leaders-economiques-africains-madame-loubna-tricha-dans-le-top-10-marocain">Leaders économiques africains</a></h6>
                                        <h5> Mercredi 26 janvier 2022</h5>
                                        <p>Palmarès des leaders économiques africains: madame Loubna Tricha dans le top 10 marocain du « 100 Africa »..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-box btn-layout bt6 top-middle-1">
                            <div class="grid grid-column-2">
                                    <div class="column-6">
                                            <img src="assets/images/luban-miniature.jpg" alt="" class="img-fluid">
                                        </div>
                                <div class="column1">
                                  <div class="job-info">
                                      <h6 class="pricehead"><a href="https://www.ofppt.ma/fr/actualites/palmares-des-leaders-economiques-africains-madame-loubna-tricha-dans-le-top-10-marocain">Atelier Luban</a></h6>
                                      <h5>Vendredi 03 décembre 2021</h5>
                                      <p>OFPPT : déploiement d’un Programme d’Excellence Chinois en E-Commerce Transfrontalier (Atelier Luban)..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                    <div class="column-6">
                                            <img src="assets/images/min-ceremonie-lancement-vet-by-ehl.JPG-2.jpg" alt="" class="img-fluid">
                                        </div>
                                <div class="column1">
                                    <div class="job-info">
                                        <h6 class="pricehead"><a href="https://www.ofppt.ma/fr/actualites/en-partenariat-avec-lecole-hoteliere-de-lausanne-lofppt-lance-le-programme-d">Le programme d’excellence « VET by EHL » </a></h6>
                                        <h5>Mardi 26 octobre 2021</h5>
                                        <p>En partenariat avec l’Ecole Hôtelière de Lausanne : l’OFPPT lance le programme d’excellence « VET by EHL »..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <a class="btn btn-secondary btn-theme2" href="#"> Lire plus</a>
                      </div>
                    </div>
                    <div class="ista-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                        <h3 class="">Événements</h3>
                        <div class="events-top mt-md-5 mt-4">
                            <div class="events-top-left">
                                    <div class="icon-top">
                                        <h3>08</h3>
                                        <p>Déc</p>
                                        <span>2021</span>
                                    </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead"><a href="#">Covid’Challenge</a></h6>
                                    <p class="mb-2 mt-3">L'Institut Spécialisé de Technologie Appliquée - Agadir , ISTAGADIR, lance le Covid’Challenge dans le cadre de la recherche de solutions innovantes répondant aux problématiques relatives à la crise sanitaire actuelle.
                                      A vos idées créatives !!</p>
                                    <li>16:00- 18:00</li>
                                    <li class="melb">Microsoft Teams</li>
                            </div>
                        </div>
                        <div class="events-top mt-4">
                            <div class="events-top-left">
                                    <div class="icon-top">
                                        <h3>26</h3>
                                        <p>Mai</p>
                                        <span>2021</span>
                                    </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead"><a href="#">Online Hack&Pitch Hackathon MaroCovid19</a></h6>
                                    <p class="mb-2 mt-3">Le Groupe ISTAGADIR organise le premier Hackathon Virtuel MaroCovid19, sous le thème “Innovons ensemble pour un Maroc sans Coronavirus !”
                                      Une occasion pour nos jeunes élèves de faire sortir le meilleur en eux durant cette période critique par laquelle nous passons afin de chercher les meilleurs moyens pour freiner la propagation du virus !</p>
                                    <li>08:00 - 12:00 </li>
                                    <li class="melb">Microsoft Teams</li>
                            </div>
                        </div>
                        <div class="text-right mt-4">
                          <a class="btn btn-secondary btn-theme2" href="#"> Voir plus</a>
                        </div>
                      </div>
            </div>
        </div>
    </div>
</section>
<!--********************************************************************************************-->
<div class="ads">
          <img src="assets/images/civil.jpg" alt="ADS" style="max-width: 100%; height: auto;">
                
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
                      <li><a href="" style="color: #ffc107;">Accueil</a></li>
                      <li><a href="OFPPT.php">OFPPT</a></li>
                      <li><a href="Formation.php">Formation</a></li>
                      <li><a href="admission.php"> Admissions</a></li>
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
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
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
</body>
</html>