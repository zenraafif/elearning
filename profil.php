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
		require 'koneksi.php';
		session_start();
		$id = $_SESSION['id_user'];
		$sql = "SELECT * FROM user WHERE id_user = $id and role = 'siswa'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$siswa = $result->fetch_assoc();
		}else{
			exit;
		}
	?>

	<style>
		.center {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 30%;
		}
	</style>
  </head>
  <body>

  	<!-- Start Header -->
	<header id="mu-header" class="mu-fixed-nav" role="banner">
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
		      <a class="navbar-brand" href="index.php">Sistem Informasi Pembelajaran</a>

		    </div>

		    <!-- Link Navbar -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" background>
		      	<ul class="nav navbar-nav mu-menu navbar-right">
			        <li><a href="index.php">HOME</a></li>
			        <li><a href="index.php#mu-about">INTRODUCTION</a></li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDY <span class="caret"></span></a>
		            		<ul class="dropdown-menu" >
		            			<a class="dropdown-item" href="index.php#mu-portfolio" style="color: #000000"> >> MATERI</a><br/>
		            			<a class="dropdown-item" href="kuis" style="color: #000000"> >> QUIZZ</a>
		            		</ul>
		            </li>
		            <li><a href="index.php#mu-testimonials">ABOUT</a></li>
						<?php
						
						if(isset($_SESSION["id_user"])){
							if($_SESSION["role"] == "guru"){
								echo '
								<li>
									<a href="guru"><i class="fa fa-user" aria-hidden="true"></i>' .$_SESSION["username"].'</a>
								</li>
								';
							}else{
								echo '
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>' .$_SESSION["username"].' <span class="caret"></span></a>
										<ul class="dropdown-menu" >
											<a class="dropdown-item" href="logout.php" style="color: #000000"> Logout</a>
										</ul>
								</li>
								';
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
    	<!-- Start Counter -->
			<section>
			<div class="container-fluid" style="margin-bottom:2%; padding-top:4%">
				<div class="row">
					<div class="col-md-12">
						<div>
                            <style>
                                .center {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 30%;
                                }
                            </style>
							<div class="mu-counter-block w-25 p-3">
								<div class="row ">
                                    <img src="assets/images/avatar.png" alt="" class="rounded-circle center " style="width:18%">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->   

         
		<section>
			<div class="container" style="padding-top: 4%; padding-bottom: 10%">
				<div class="card mt-5 center" style="width: 80%;">
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><b>Nama :</b> <?php echo $siswa['nama']?></li>
						<li class="list-group-item"><b>Username :</b> <?php echo $siswa['username']?></li>
						<li class="list-group-item"><b>Email :</b> <?php echo $siswa['email']?></li>
						<li class="list-group-item"><b>Gender :</b> <?php echo $siswa['gender']?></li>
					</ul>
					<button type="button" class="btn btn-primary btn-lg btn-block center" style="width:60% !important"><a href="profil_kuis.php" class="link-light" style="color: white !important;">Kuis Yang Sudah Selesai</a></button>
				</div>
			</div>
		</section>

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
	<!-- <script type="text/javascript" src="assets/js/custom.js"></script> -->
	
    
  </body>
</html>