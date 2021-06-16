<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 
<?php
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM user WHERE id_user = $id and role = 'siswa'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $siswa = $result->fetch_assoc();
?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Detail Siswa</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input disabled type="text" name="nama" class="form-control" value="<?= $siswa["nama"]?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input disabled type="text" name="username" class="form-control" value="<?= $siswa["username"]?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input disabled type="text" name="email" class="form-control" value="<?= $siswa["email"]?>">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control" disabled>
                        <?php if($siswa["gender"] == 'laki-laki'){
                            echo '<option value="laki-laki" selected>Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            ';
                        }else{
                            echo '<option value="laki-laki">Laki-laki</option>
                                <option value="perempuan" selected>Perempuan</option>
                            ';
                        }?>
                    </select>
                </div>
                <div class="text-right mt-3">
                    <a href="siswa.php">
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