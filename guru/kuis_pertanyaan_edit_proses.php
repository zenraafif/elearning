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

			$id_pertanyaan = $_POST['id_pertanyaan'];
			$id_kuis = $_POST['id_kuis'];
			$pertanyaan = $_POST['pertanyaan'];
			$pilihan_a = $_POST['pilihan_a'];
			$pilihan_b = $_POST['pilihan_b'];
			$pilihan_c = $_POST['pilihan_c'];
			$pilihan_d = $_POST['pilihan_d'];
			$skor = $_POST['skor'];
			$kunci_jawaban = $_POST['kunci_jawaban'];
			

            $sql="UPDATE kuis_pertanyaan SET 
					pertanyaan='".$pertanyaan."', 
					pilihan_a='".$pilihan_a."',
					pilihan_b='".$pilihan_b."',
					pilihan_c='".$pilihan_c."',
					pilihan_d='".$pilihan_d."',
					skor='".$skor."',
					kunci_jawaban='".$kunci_jawaban."'
					WHERE id_pertanyaan='".$id_pertanyaan."'";

			if ($conn->query($sql) === TRUE) {
				echo "<script>
				    swal({
				        title:'Sukses',
				        text:'Pertanyaan berhasil diubah',
				        icon:'success',
				        timer:2000,
				        buttons:false
				        }).then(()=>{
				            window.location.href='kuis_pertanyaan.php?id=".$id_kuis."';
				            })
				    </script>";
			} else {
				      echo "<script>
				          swal({
				              title:'Gagal',
				              text:'Pertanyaan gagal diubah".$conn->error."',
				              icon:'error',
				              timer:2000,
				              buttons:false
				              }).then(()=>{
				                  window.location.href='kuis_pertanyaan.php?id=".$id_kuis."';
				                  })
				          </script>";
					// echo "Error: " . $sql . "<br>" . $conn->error;
			};

			$conn->close();

		?>
	</body>
</html>
