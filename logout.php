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
    session_start();
    $home_url = "http://" . $_SERVER['SERVER_NAME']."/elearning";
    $logout = session_destroy();
    if($logout){
        echo "<script>
            swal({
                title:'Sukses',
                text:'Logout Berhasil',
                icon:'success',
                timer:2000,
                buttons:false
                }).then(()=>{
                    window.location.href='".$home_url."';
                    })
            </script>";
    }else{
        echo "<script>
          swal({
              title:'Gagal',
              text:'Logout Gagal',
              icon:'error',
              timer:2000,
              buttons:false
              }).then(()=>{
                  window.location.href='';
                  })
          </script>";
        }
    ?>
  </body>
</html>

