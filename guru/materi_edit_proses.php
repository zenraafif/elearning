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
			$id_materi = $_POST['id_materi']; 

            if($file_sampul == '' && $file_materi ==''){
                echo "sampul dan materi kosong";
				$sql="UPDATE materi SET 
					judul='".$judul."',
					id_mapel='".$id_mapel."'
					WHERE id_materi='".$id_materi."'";
			}elseif($file_sampul == ''){
                echo "sampul kosong";
				$sql="UPDATE materi SET 
					judul='".$judul."',
					file_materi='".$file_materi."',
					id_mapel='".$id_mapel."'
					WHERE id_materi='".$id_materi."'";
			}elseif($file_materi == ''){
                echo "materi yang kosong";
				$sql="UPDATE materi SET 
                    judul='".$judul."',
					file_sampul='".$file_sampul."',
					id_mapel='".$id_mapel."'
					WHERE id_materi='".$id_materi."'";
			}else{
                echo "tidak ada yang kosong";
                $sql="UPDATE materi SET 
                    judul='".$judul."',
                    file_materi='".$file_materi."',
                    file_sampul='".$file_sampul."',
                    file_materi='".$file_materi."'
                    WHERE id_materi='".$id_materi."'";
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
				            window.location.href='materi.php';
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
				                  window.location.href='materi.php';
				                  })
				          </script>";
					// echo "Error: " . $sql . "<br>" . $conn->error;
			};

			$conn->close();

		?>
	</body>
</html>
