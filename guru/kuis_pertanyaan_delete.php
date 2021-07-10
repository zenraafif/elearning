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

    $id_kuis = $_GET['id_kuis'];
    $id_pertanyaan = $_GET['id_pertanyaan'];

    $sql = "DELETE FROM `kuis_pertanyaan` WHERE id_pertanyaan = $id_pertanyaan";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            swal({
                title:'Sukses',
                text:'Data berhasil dihapus',
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
                        text:'Data gagal dihapus".$conn->error."',
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
