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
    		<!-- Start Counter -->
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="" style="margin-bottom : 50px !important;">
                            <style>
                                .center {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 30%;
                                }
                            </style>
							<div class="mu-counter-block w-75 p-3">
								<div class="row ">
                                    <img src="assets/images/avatar.png" alt="" class="rounded-circle center " style="width:25%">
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->     

         
		<section>
			<div class="container">
				<form>
					<div class="form-group">
						<label for="inputAddress">Nama</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>
					<div class="form-group">
						<label for="inputAddress">Username</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Email</label>
						<input type="email" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Password</label>
						<input type="password" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						<small id="emailHelp" class="form-text text-muted">Isi untuk mengganti password.</small>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Jenis Kelamin</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select>
					</div>

					<div class="form-group">
						<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							Check me out
						</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</div>
		</section>

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