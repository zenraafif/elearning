<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIP Login</title>
    <script src="../sweet/sweetalert/sweetalert.min.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../	styles.css" rel="stylesheet">
    <?php require '../koneksi.php';?> 
  </head>
  <body>
		<?php
			$nama = $_POST['nama'];
			$username = $_POST['username']; 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			$gender = $_POST['gender']; 
			$role = $_POST['role']; 
			

			$sql = "INSERT INTO user (nama, username, email, password, gender, role)
			VALUES ('$nama', '$username', '$email','$password','$gender', '$role')";

			if ($conn->query($sql) === TRUE) {
				echo "<script>
				    swal({
				        title:'Sukses',
				        text:'Siswa berhasil ditambahkan',
				        icon:'success',
				        timer:2000,
				        buttons:false
				        }).then(()=>{
				            window.location.href='siswa.php';
				            })
				    </script>";
			} else {
				      echo "<script>
				          swal({
				              title:'Gagal',
				              text:'Siswa gagal ditambahkan".$conn->error."',
				              icon:'error',
				              timer:2000,
				              buttons:false
				              }).then(()=>{
				                  window.location.href='siswa.php';
				                  })
				          </script>";
					// echo "Error: " . $sql . "<br>" . $conn->error;
			};

			$conn->close();

		?>
	</body>
</html>
