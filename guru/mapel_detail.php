<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 
<?php
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM mapel WHERE id_mapel = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $mapel = $result->fetch_assoc();
?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Detail Mata Pelajaran</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form">
                <div class="form-group">
                    <label>Nama</label>
                    <input disabled type="text" name="nama" class="form-control" value="<?= $mapel["nama"]?>">
                </div>
                <div class="text-right mt-3">
                    <a href="mapel.php">
                        <button type="submit" name="btn-simpan" class="btn btn-primary">Kembali</button>
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } else { ?> 
    data tidak ditemukan
<?php }?>

<?php include 'view/footer.php';?>