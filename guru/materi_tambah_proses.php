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
			$judul = $_POST['judul'];
			$file_sampul = $_POST['file_sampul']; 
			$file_materi = $_POST['file_materi']; 
			$id_mapel = $_POST['id_mapel'];
			

			$sql = "INSERT INTO materi (judul, file_sampul, file_materi, id_mapel)
			VALUES ('$judul', '$file_sampul', '$file_materi','$id_mapel')";

			if ($conn->query($sql) === TRUE) {
				echo "<script>
				    swal({
				        title:'Sukses',
				        text:'Materi berhasil ditambahkan',
				        icon:'success',
				        timer:2000,
				        buttons:false
				        }).then(()=>{
				            window.location.href='materi.php';
				            })
				    </script>";
			} else {
				      echo "<script>
				          swal({
				              title:'Gagal',
				              text:'Materi gagal ditambahkan".$conn->error."',
				              icon:'error',
				              timer:2000,
				              buttons:false
				              }).then(()=>{
				                  window.location.href='materi.php';
				                  })
				          </script>";
					// echo "Error: " . $sql . "<br>" . $conn->error;
			};

			$conn->close();

		?>
	</body>
</html>
