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
  $conn = mysqli_connect('localhost','root','','sip_elearning');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM user where username='$username' AND password = '$password'";
  $row = mysqli_query($conn,$query);
  $data = mysqli_fetch_assoc($row);
  $cek = mysqli_num_rows($row);

  if ($data['role'] == $_POST['role']) {
    if($cek > 0){
        if($data['role'] == 'admin'){
            $_SESSION['role'] = 'admin';
            $_SESSION['username'] = $data['username'];
            $_SESSION['user_id'] = $data['id_user'];
            echo "<script>
                  swal({
                      title:'Sukses',
                      text:'Login Admin Berhasil',
                      icon:'success',
                      timer:2000,
                      buttons:false
                      }).then(()=>{
                          window.location.href='admin';
                          })
                  </script>";
        }else if($data['role'] == 'guru'){
            $_SESSION['role'] = 'guru';
            $_SESSION['username'] = $data['username'];
            $_SESSION['user_id'] = $data['id_user'];
            echo "<script>
                  swal({
                      title:'Sukses',
                      text:'Login Guru Berhasil',
                      icon:'success',
                      timer:2000,
                      buttons:false
                      }).then(()=>{
                          window.location.href='guru';
                          })
                  </script>";
        }else if($data['role'] == 'siswa'){
            $_SESSION['role'] = 'siswa';
            $_SESSION['username'] = $data['username'];
            $_SESSION['user_id'] = $data['id_user'];
            echo "<script>
                  swal({
                      title:'Sukses',
                      text:'Login Murid Berhasil',
                      icon:'success',
                      timer:2000,
                      buttons:false
                      }).then(()=>{
                          window.location.href='murid.html';
                          })
                  </script>";
        }
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
  }else{
    echo "<script>
          swal({
              title:'Gagal',
              text:'Akun Tidak Ditemukan',
              icon:'error',
              timer:2000,
              buttons:false
              }).then(()=>{
                  window.location.href='login.html';
                  })
          </script>";
  }
    ?>
  </body>
</html>

