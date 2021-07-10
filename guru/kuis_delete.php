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

    $id = $_GET['id'];

    $sql = "DELETE FROM `kuis` WHERE id_kuis = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            swal({
                title:'Sukses',
                text:'Data berhasil dihapus',
                icon:'success',
                timer:2000,
                buttons:false
                }).then(()=>{
                    window.location.href='kuis.php';
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
                            window.location.href='kuis.php';
                            })
                    </script>";
            // echo "Error: " . $sql . "<br>" . $conn->error;
    };

    $conn->close();

?>
	</body>
</html>
