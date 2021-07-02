<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIP Login</title>
    <script src="../sweet/sweetalert/sweetalert.min.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles.css" rel="stylesheet">
  </head>
  <body>

  <?php 
    require "../koneksi.php";
    session_start();

    // jika data id tidak ditemukan di url
    if(isset($_GET["id"])){
        $id = $_GET["id"];
      }else{
        echo "<h3 class='m-3'>Data tidak ditemukan</h3>";
        exit;
      }
    
    
    // Definisikan Variabel untuk input data (1)  
    $jawaban = $_POST;
    $total_skor = 0;
    $total_jawab = count($jawaban);
    $jawaban_benar = 0;
    $waktu_mulai = $_GET["waktu_mulai"];
    $waktu_selesai = date('Y-m-d H:i:s', time());
    $total_waktu = strtotime($waktu_selesai)-strtotime($waktu_mulai);

    foreach( $jawaban as $key => $n ) {
        $sql_pertanyaan = "SELECT * FROM kuis_pertanyaan WHERE id_pertanyaan='$key'";
        $result = $conn->query($sql_pertanyaan)->fetch_assoc();

        if($n == $result['kunci_jawaban']){
            $total_skor+=$result['skor'];
            $jawaban_benar+=1;
        }else{
            $total_skor+=0;
        }
    }
    
    // Definisikan Variabel untuk input data (2)
    $id_user = $_SESSION['id_user'];
    $jawaban_salah = $total_jawab-$jawaban_benar;
    $id_kuis = $id;

    $sql = "INSERT INTO `kuis_jawaban` (`id_jawaban`, `id_user`, `total_waktu`, `total_skor`, `waktu_mulai`, `waktu_selesai`, `jawaban_benar`, `jawaban_salah`, `id_kuis`) 
    VALUES (NULL, '$id_user', '$total_waktu', '$total_skor', '$waktu_mulai', '$waktu_selesai', '$jawaban_benar', '$jawaban_salah', '$id_kuis')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>
        swal({
            title:'Sukses',
            text:'Kuis Berhasil Disimpan',
            icon:'success',
            timer:2000,
            buttons:false
            }).then(()=>{
                window.location.href='index.php';
                })
        </script>";
    }else{
      echo "<script>
        swal({
            title:'Gagal',
            text:'Kuis Gagal Ditambahkan".$conn->error."',
            icon:'error',
            timer:2000,
            buttons:false
            }).then(()=>{
                window.location.href='index.php';
                })
        </script>";
    }
    exit;
	
			$conn->close();

	?>
	</body>
</html>
