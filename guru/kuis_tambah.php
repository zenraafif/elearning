<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>


 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Tambah Kuis</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="kuis_tambah_proses.php">
                <div class="form-group">
                    <label>Judul Kuis</label>
                    <input type="text" name="judul_kuis" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" class="form-control">
                </div>
                <div class="form-group">
                    <label>Waktu (menit)</label>
                    <input type="number" name="waktu" class="form-control">
                </div>
                <div class="text-right mt-3">
                    <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'view/footer.php';?>