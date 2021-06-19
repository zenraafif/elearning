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
<?php
    $sql = "SELECT * FROM mapel";
    $result = $conn->query($sql);
?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Edit Materi</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="materi_edit_proses.php">
                <div class="form-group">
                    <input type="text" name="id_materi" class="form-control" value="<?= $materi["id_materi"]?>" hidden>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input  type="text" name="judul" class="form-control" value="<?= $materi["judul"]?>">
                </div>
                <div class="form-group">
                    <label>File Sampul</label>
                    <input  type="text" name="file_sampul" class="form-control" value="<?= $materi["file_sampul"]?>">
                </div>
                <div class="form-group">
                    <label>File Materi</label>
                    <input  type="text" name="file_materi" class="form-control" value="<?= $materi["file_materi"]?>">
                </div>
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select class="form-control" id="mapel" name="id_mapel">
                        <?php foreach($result as $res):?>
                        <option value="<?= $res['id_mapel']?>"
                        <?php if($materi['id_mapel'] == $res['id_mapel']){echo "selected";}?>>
                            <?= $res['nama']?>
                        </option>
                        <?php endforeach;?>
                    </select>
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
    data tidak ditemukan
<?php }?>

<?php include 'view/footer.php';?>