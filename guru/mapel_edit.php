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
            <h4>Ubah Mata Pelajaran</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form  method="post" action="mapel_edit_proses.php">
                <div class="form-group">
                    <input type="text" name="id_mapel" class="form-control" value="<?= $mapel["id_mapel"]?>" hidden>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $mapel["nama"]?>">
                </div>
                <div class="text-right mt-3">
                    <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } else { ?> 
    data ga ada
<?php }?>

<?php include 'view/footer.php';?>