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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="../assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="../styles.css" rel="stylesheet">

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
          <a class="navbar-brand" href="#">SIP Admin</a>

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
                <li><a href="login.html">LOGOUT</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start Image Slider -->

<section id="mu-about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-about-area">
          <div class="mu-about-header">
            <h2 class="mu-heading-title">Dashboard Guru</h2>
            <span class="mu-header-dot"></span>
            <p>Selamat Datang di Halaman Guru</p>
            <input type="button" class="btn btn-primary" data-toggle="modal" data-target=".logout" value="Logout">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <a href="siswa_tambah.php">
    <button>Tambah Siswa</button>
  </a>
  
<div class="modal fade logout" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-header" style="background-color: white; color: black">
         <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi</h5>
        </div>
        <div class="modal-body" style="background-color: white; color: black">
          <p style="text-align: center;">Apakah Anda Yakin Akan Keluar Dari Halaman Ini...?</p>
        </div>
        <div class="modal-footer" style="background-color: white; color: black">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger" onclick="location.href='index.html'">Ya</button>
        </div>
        </div>
      </div>
    </div>
  
  <!-- Start image Slider -->
  
  <!-- Start main content -->
    
  <main role="main">

  </main>
  
  <!-- End main content --> 
  
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.min.js"></script>
  <!-- Slick slider -->
    <script type="text/javascript" src="../assets/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="../assets/js/counter.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="../assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="../assets/js/app.js"></script>
    <!-- Custom js -->
  <script type="text/javascript" src="../assets/js/custom.js"></script>
  
    
  </body>
</html>