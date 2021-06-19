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
			$id_mapel = $_POST['id_mapel'];
			$nama = $_POST['nama'];

			$sql="UPDATE mapel SET 
                nama='".$nama."' 
                WHERE id_mapel='".$id_mapel."'";

			if ($conn->query($sql) === TRUE) {
				echo "<script>
				    swal({
				        title:'Sukses',
				        text:'Mata pelajaran berhasil ditambahkan',
				        icon:'success',
				        timer:2000,
				        buttons:false
				        }).then(()=>{
				            window.location.href='mapel.php';
				            })
				    </script>";
			} else {
				      echo "<script>
				          swal({
				              title:'Gagal',
				              text:'Mata pelajaran gagal ditambahkan".$conn->error."',
				              icon:'error',
				              timer:2000,
				              buttons:false
				              }).then(()=>{
				                  window.location.href='mapel.html';
				                  })
				          </script>";
					// echo "Error: " . $sql . "<br>" . $conn->error;
			};

			$conn->close();

		?>
	</body>
</html>
