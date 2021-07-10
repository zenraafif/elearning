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
			$id_user = $_POST['id_user'];
			$nama = $_POST['nama'];
			$username = $_POST['username']; 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			$gender = $_POST['gender']; 
			$role = $_POST['role']; 

			


			if($password != ''){
				$sql="UPDATE user SET 
					nama='".$nama."', 
					username='".$username."',
					email='".$email."',
					password='".$password."',
					gender='".$gender."',
					role='".$role."'
					WHERE id_user='".$id_user."'";
			}else{
				$sql="UPDATE user SET 
					nama='".$nama."', 
					username='".$username."',
					email='".$email."',
					gender='".$gender."',
					role='".$role."'
					WHERE id_user='".$id_user."'";
			}

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
