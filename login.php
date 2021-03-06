    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIP Login</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="sweet/sweetalert/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="login-dark">
      <img src="assets/images/slider1.jpg" width="100%">
        <form action="ceklogin.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/images/FrameTest.png" width="100px"></div>
            <p class="text-center" style="font-size: x-small;">Silahkan masukkan username dan password</p>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="guru" checked>
                  <label class="form-check-label" for="exampleRadios1">Guru</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="siswa">
                  <label class="form-check-label" for="exampleRadios2">Murid</label>
                </div>
            </div>
            <div class="form-group">
            	<input type="submit" class="button btn-primary btn-block" value="LogIn" name="btnLogin" id="btnLogin" ><br/>
              <a href="index.html" style="color: #ffffff">Back to Home</a>
            </div>
        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
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