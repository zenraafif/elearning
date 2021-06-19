<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 
<?php
    $id = $_GET["id"];

    $sql = "SELECT q.*, a.* 
    FROM materi q
    INNER JOIN mapel a ON q.id_mapel = a.id_mapel
    WHERE id_materi = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $materi = $result->fetch_assoc();
?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Detail Materi</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form">
                <div class="form-group">
                    <label>Judul</label>
                    <input disabled type="text" name="nama" class="form-control" value="<?= $materi["judul"]?>">
                </div>
                <div class="form-group">
                    <label>File Sampul</label>
                    <input disabled type="text" name="file_sampul" class="form-control" value="<?= $materi["file_sampul"]?>">
                </div>
                <div class="form-group">
                    <label>File Materi</label>
                    <input disabled type="text" name="file_materi" class="form-control" value="<?= $materi["file_materi"]?>">
                </div>
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    <select name="mapel" class="form-control" disabled>
                        <option><?= $materi["nama"]?><option>
                    </select>
                </div>
                <div class="text-right mt-3">
                    <a href="materi.php">
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