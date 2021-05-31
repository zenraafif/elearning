<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIP Login</title>
    <script src="sweet/sweetalert/sweetalert.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    
  </head>
  <body>
  <?php
   //error_reporting(0);
   //session_strat();
    if(isset($_POST['btnLogin'])){
      $user   = $_POST['user'];
      $pass   = $_POST['password'];
      $radio  = $_POST['radio'];

      //echo $user."<br/>".$pass."<br/>".$radio;
      if($user==='admin' && $pass==='admin' && $radio==='admin'){
            echo "<script>
                swal({
                    title:'Sukses',
                    text:'Login Admin Berhasil',
                    icon:'success',
                    timer:2000,
                    buttons:false
                    }).then(()=>{
                        window.location.href='admin.html';
                        })
                </script>";
      }else if($user==='user' && $pass==='user' && $radio==='user'){
            echo "<script>
                swal({
                    title:'Sukses',
                    text:'Login User Berhasil',
                    icon:'success',
                    timer:2000,
                    buttons:false
                    }).then(()=>{
                        window.location.href='user.html';
                        })
                </script>";
      }else{
            echo "<script>
                swal({
                    title:'Gagal',
                    text:'Username atau Password Salah',
                    icon:'error',
                    timer:2000,
                    buttons:false
                    }).then(()=>{
                        window.location.href='login.html';
                        })
                </script>";
      }
      }
    ?>
  </body>
</html>
