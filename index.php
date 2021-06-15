<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIP Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/imges/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Line icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="styles.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
		session_start();
	?>
  </head>
  <body>

  	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
		  <div class="container-fluid">
		    <!-- Ini Navbar ya -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		      <!-- Text Logo -->
		      <a class="navbar-brand" href="#">Sistem Informasi Pembelajaran</a>

		    </div>

		    <!-- Link Navbar -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" background>
		      	<ul class="nav navbar-nav mu-menu navbar-right">
			        <li><a href="#">HOME</a></li>
			        <li><a href="#mu-about">INTRODUCTION</a></li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDY <span class="caret"></span></a>
		            		<ul class="dropdown-menu" >
		            			<a class="dropdown-item" href="#mu-portfolio" style="color: #000000"> >> MATERI</a><br/>
		            			<a class="dropdown-item" href="quizz.html" style="color: #000000"> >> QUIZZ</a>
		            		</ul>
		            </li>
		            <li><a href="#mu-testimonials">ABOUT</a></li>
					<!-- array(3) { 
						["role"]=> string(4) "guru" 
						["username"]=> string(5) "guru1" 
						["user_id"]=> string(1) "3" } -->
					<?php
						
						if(isset($_SESSION["user_id"])){
							if($_SESSION["role"] == "guru"){
								echo '<li><a href="guru"><i class="fa fa-user" aria-hidden="true"></i>' .$_SESSION["username"].'</a></li>';
							}else{
								echo '<li><a href="profil.php"><i class="fa fa-user" aria-hidden="true"></i>' .$_SESSION["username"].'</a></li>';
							}
						}else{
							echo '<li><a href="login.php">LOGIN</a></li>';
						};
					?>
		      	</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Image Slider -->

	<section id="mu-featured-slider">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-featured-slide">

					<!-- Start Single slide -->
					<div class="mu-featured-slider-single">
						<img src="assets/images/carousel/pict1.jpg" width="100%" height="660">
						<div class="mu-featured-slider-content">
							<h1>Mudah diakses</h1>
						</div>
					</div>
					<!-- End Single slide -->

					<!-- Start Single slide -->
					<div class="mu-featured-slider-single">
						<img src="assets/images/carousel/pict2.jpg" width="100%" height="660">
						<div class="mu-featured-slider-content">
							<h1>Materi ringkas</h1>
						</div>
					</div>
					<!-- End Single slide -->

					<!-- Start Single slide -->
					<div class="mu-featured-slider-single">
						<img src="assets/images/carousel/pict3.jpg" width="100%" height="660">
						<div class="mu-featured-slider-content">
							<h1>Fitur mudah dipahami</h1>
						</div>
					</div>
					<!-- End Single slide -->

				</div>
			</div>			
		</div>
	</section>
	
	<!-- Start image Slider -->
	
	<!-- Start main content -->
		
	<main role="main">

		<!-- Start Introduction -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">

							<div class="mu-about-header">
								<h2 class="mu-heading-title">Introduction</h2>
								<span class="mu-header-dot"></span>
								<p>Web Pembelajaran ringan untuk semua jenis platform. Dengan materi yang mudah diunduh.</p>
							</div>

							<!-- Start Introduction Content -->
							<div class="mu-about-content">
								<div class="row">

									<!-- Introduction Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-about-content-single">
											<span class="mu-about-icon-box">
												<i class="icon-puzzle"></i>
											</span>
											<h4>Simple Features</h4>
											<p></p>
										</div>
									</div>
									<!-- / AIntroduction Single Content -->

									<!-- Introduction Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-about-content-single">
											<span class="mu-about-icon-box">
												<i class="icon-settings"></i>
											</span>
											<h4>Build using HTML</h4>
											<p></p>
										</div>
									</div>
									<!-- / Introduction Single Content -->

									<!-- Introduction Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-about-content-single">
											<span class="mu-about-icon-box">
												<i class="icon-screen-tablet"></i>
											</span>
											<h4>Compatible in all Platform</h4>
											<p></p>
										</div>
									</div>
									<!-- / Introduction Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-about-content-single">
											<span class="mu-about-icon-box">
												<i class="icon-docs"></i>
											</span>
											<h4>Easy Download and Copy</h4>
											<p></p>
										</div>
									</div>
									<!-- / Introduction Single Content -->

								</div>
							</div>
							<!-- End Introduction Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Introduction -->

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">
							<h2 class="mu-heading-title">SOME FACTS ABOUT US</h2>

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="icon-symbol-male"></i>
											<div class="counter-value" data-count="1079">0</div>
											<h5 class="mu-counter-name">Male Student</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="icon-symbol-female"></i>
											<div class="counter-value" data-count="557">0</div>
											<h5 class="mu-counter-name">Female Student</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="icon-people"></i>
											<div class="counter-value" data-count="87">0</div>
											<h5 class="mu-counter-name">Teacher</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="icon-trophy"></i>
											<div class="counter-value" data-count="10">0</div>
											<h5 class="mu-counter-name">Got Awards</h5>
										</div>
									</div>
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->


		<!-- Start Materi -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">

							<div class="mu-portfolio-header"  />
								<h2 class="mu-heading-title">LEARNING <span>MATERIALS</span></h2>
								<span class="mu-header-dot"></span>
								<p>Silahkan pilih dan download materi</p>
							</div>

							<!-- Start Materi Filter -->
							<div class="mu-portfolio-filter-area">
								<ul class="mu-simplefilter">
					                <li class="active" data-filter="all">All</li>
					                <li data-filter="1">Matematika</li>
					                <li data-filter="2">Fisika</li>
					                <li data-filter="3">Biologi</li>
					                <li data-filter="4">Kimia</li>
									<li data-filter="5">Ekonomi</li>
					            </ul>
							</div>

							<!-- Start Materi Content -->
							<div class="mu-portfolio-content">
								<div class="filtr-container">

					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
					                   <a href="#" data-toggle="modal" data-target=".a001">
						                   	<img class="img-responsive" src="assets/images/materi/math/baris-deres.JPG" alt="image">
						                   	<div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Baris dan Deret</h4>
						                    </div>
					                   </a>
					                </div>

					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2">
					                    <a href="#" data-toggle="modal" data-target=".a002">
					                    	<img class="img-responsive" src="assets/images/materi/fisika/alat-optik.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Alat Optik</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2">
					                    <a href="" data-toggle="modal" data-target=".a003">
					                    	<img class="img-responsive" src="assets/images/materi/fisika/Momentum dan Impuls.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Momentum dan Impuls</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2">
					                    <a href="#" data-toggle="modal" data-target=".a004">
					                    	<img class="img-responsive" src="assets/images/materi/fisika/Hukum Gerak Newton.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Hukum Gerak Newton</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2">
					                    <a href="#" data-toggle="modal" data-target=".a005">
					                    	<img class="img-responsive" src="assets/images/materi/fisika/Induksi Magnet.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Induksi Magnet</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
					                    <a href="#" data-toggle="modal" data-target=".a006">
					                    	<img class="img-responsive" src="assets/images/materi/math/Vektor.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Vektor</h4>
						                    </div>
					                    </a>
					                </div>
									
					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
					                    <a href="#" data-toggle="modal" data-target=".a007">
					                    	<img class="img-responsive" src="assets/images/materi/biologi/Makanan.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Makanan</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
					                    <a href="#" data-toggle="modal" data-target=".a008">
					                    	<img class="img-responsive" src="assets/images/materi/math/Statistika.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Statistika</h4>
						                    </div>
					                    </a>
					                </div>

					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
					                    <a href="#" data-toggle="modal" data-target=".a009">
					                    	<img class="img-responsive" src="assets/images/materi/kimia/Titrasi-AsamBasa.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Titrasi Asam Basa</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
					                    <a href="#" data-toggle="modal" data-target=".a010">
					                    	<img class="img-responsive" src="assets/images/materi/kimia/Termokimia.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Termokimia</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
					                    <a href="#" data-toggle="modal" data-target=".a011">
					                    	<img class="img-responsive" src="assets/images/materi/kimia/Kesetimbangan Kimia.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Kesetimbangan Kimia</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
					                    <a href="#" data-toggle="modal" data-target=".a012">
					                    	<img class="img-responsive" src="assets/images/materi/kimia/Teori Asam Basa.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Teori Asam Basa</h4>
						                    </div>
					                    </a>
					                </div>
									
									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
					                    <a href="#" data-toggle="modal" data-target=".a013">
					                    	<img class="img-responsive" src="assets/images/materi/biologi/Sistem Sirkulasi.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Sistem Sirkulasi</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="5">
					                    <a href="#" data-toggle="modal" data-target=".a014">
					                    	<img class="img-responsive" src="assets/images/materi/ekonomi/Permintaan dan Penawaran.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Permintaan dan Penawaran</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="5">
					                   <a href="#" data-toggle="modal" data-target=".a015">
					                    	<img class="img-responsive" src="assets/images/materi/ekonomi/Bentuk - Bentuk Pasar.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Bentuk - Bentuk Pasar</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="5">
					                    <a href="#" data-toggle="modal" data-target=".a016">
					                    	<img class="img-responsive" src="assets/images/materi/ekonomi/Permasalahan Ekonomi.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Permasalahan Ekonomi</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="5">
					                    <a href="#" data-toggle="modal" data-target=".a017">
					                    	<img class="img-responsive" src="assets/images/materi/ekonomi/Pasar Modal.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Pasar Modal</h4>
						                    </div>
					                    </a>
					                </div>

					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
										<a href="#" data-toggle="modal" data-target=".a018">
					                    	<img class="img-responsive" src="assets/images/materi/biologi/Katabolisme.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Katabolisme</h4>
						                    </div>
					                   </a>
					                </div>

					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
					                    <a href="#" data-toggle="modal" data-target=".a019">
					                    	<img class="img-responsive" src="assets/images/materi/math/turunan.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Turunan</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
					                    <a href="#" data-toggle="modal" data-target=".a020">
					                    	<img class="img-responsive" src="assets/images/materi/biologi/Pembelahan Sel.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Pembelahan Sel</h4>
						                    </div>
					                    </a>
					                </div>

					                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
					                    <a href="#" data-toggle="modal" data-target=".a021">
					                    	<img class="img-responsive" src="assets/images/materi/math/penerapan-turunan.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Penerapan Turunan</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2">
					                    <a href="#" data-toggle="modal" data-target=".a022">
					                    	<img class="img-responsive" src="assets/images/materi/fisika/fisika-atom.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Fisika Atom</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
					                    <a href="#" data-toggle="modal" data-target=".a023">
					                    	<img class="img-responsive" src="assets/images/materi/biologi/Sistem Saraf.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Sistem Saraf</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="5">
					                    <a href="#" data-toggle="modal" data-target=".a024">
					                    	<img class="img-responsive" src="assets/images/materi/ekonomi/Sistem Perekonomian.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Sistem Perekonomian</h4>
						                    </div>
					                    </a>
					                </div>

									<div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
					                    <a href="#" data-toggle="modal" data-target=".a025">
					                    	<img class="img-responsive" src="assets/images/materi/kimia/Volta.JPG" alt="image">
						                    <div class="mu-filter-item-content">
						                    	<h4 class="mu-filter-item-title">Sel Volta</h4>
						                    </div>
					                    </a>
					                </div>

					            </div>
							</div>
							<!-- End Materi Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Materi -->

		<!-- Modal Materi-->
		<div class="modal fade a001" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/baris_mat2_3.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a002" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/altop_fis1_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a003" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/moment_fis2_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a004" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/newton_fis1.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a005" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/mgnt_fis3_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a006" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/vektor_mat3.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a007" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/makan_bio2_8.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a008" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/stati_mat2_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a009" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/trasab_kim3_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a010" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/termo_kim2_3.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a011" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/stimb_kim2_5.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a012" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  <div class="modal-body">
				<center><embed type="application/pdf" src="materi/teoab_kim3_3.pdf" width="100%" height="800"></embed></center>
				<center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
			  </div>
			</div>
		  </div>

		<div class="modal fade a013" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/sirku_bio2_7.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a014" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/pnwrn_eko1_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a015" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/pasar_eko1_1.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a016" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/mslek_eko1_2.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a017" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/modal_eko3_1.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a018" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/katab_bio3_3.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a019" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/diff_mat41.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a020" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/sel_bio4_1.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a021" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/diffp_mat4.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a022" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/atom_fis4.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a023" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/saraf_bio3_8.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a024" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/steko_eko1_1.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>

		<div class="modal fade a025" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-body">
		      <center><embed type="application/pdf" src="materi/volta_kim2_4.pdf" width="100%" height="800"></embed></center>
		      <center><button type="button" class="btn btn-danger" data-dismiss="modal" > Close</button></center>
		    </div>
		  </div>
		</div>
		<!-- End Modal-->

		<!-- Start About -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<h2 class="mu-heading-title">About <span>US</span></h2>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<img class="image-responsive center-block" src="assets/images/foto/Kharis.jpg" style="width: 150px; height: 230px;" alt="khars" />
										<h5 class="mu-ct-name"> Kharis Rahmat Hidayat </h5>
										<p>4612420002</p>
											
									</li>

									<li>
										<img class="image-responsive center-block" src="assets/images/foto/Firdho.jpg" style="width: 150px; height: 230px;" alt="" />
										<h5 class="mu-ct-name">Firdo Ibnu Qoshmal</h5>
										<p>4612420025</p>
									</li>

									<li>
										<img class="image-responsive center-block" src="assets/images/foto/Zahrotun.jpg" style="width: 150px; height: 230px;" alt="khars" />
										<h5 class="mu-ct-name">Zahrotun Nafisaht</h5>
										<p>4612420007</p>
											
									</li>

									<li>
										<img class="image-responsive center-block" src="assets/images/foto/Anam.png" style="width: 170px; height: 230px;" alt="" />
										<h5 class="mu-ct-name">Muhammad Khoirul Anam</h5>
										<p>4612420024</p>
									</li>

									<li>
										<img class="image-responsive center-block" src="assets/images/foto/herra.jpg" style="width: 150px; height: 230px;" alt="khars" />
										<h5 class="mu-ct-name">Wiyan Herra Herviana</h5>
										<p>4612420028</p>
											
									</li>

									<li>
										<img class="image-responsive center-block" src="assets/images/foto/Hartanto.jpeg" style="width: 150px; height: 230px;" alt="" />
										<h5 class="mu-ct-name">Hartanto Suryo Saputra </h5>
										<p>4612420029</p>
									</li>

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

	
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-contact-header">
								<h2 class="mu-heading-title">CONTACT <span>US</span></h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">	
									<div class="col-md-12" style="text-align:center;">
										<div class="mu-contact-right">
											<h4>Universitas Negeri Semarang</h4>
											<address>
												<p><i class="icon-location-pin"></i>Jl. Sekaran, Gunung Pati, Semarang, Prov. Jawa Tengah </p>
												<p><i class="icon-phone"></i>024-8508093</p>
											</address>
											<div class="mu-social-media">
												<a href="#"><i class="icon-social-facebook"></i></a>
												<a href="#"><i class="icon-social-twitter"></i></a>
												<a href="#"><i class="icon-social-google"></i></a>
												<a href="#"><i class="icon-social-linkedin"></i></a>
												<a href="#"><i class="icon-social-youtube"></i></a>
											</div>
										</div>
									</div>	

								</div>
							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>
	
	<!-- End main content -->	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	
    
  </body>
</html>