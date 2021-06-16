<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>


 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 mb-3">
            <h4>Tambah Materi</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="materi_tambah_proses.php">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                </div>
                <div class="form-group mt-2 mb-2">
                    <label for="foto-sampul">Foto Sampul</label><br>
                    <input type="file" name="foto_sampul" class="form-control-file" id="foto-sampul">
                </div>
                <div class="form-group mt-2 mb-2">
                    <label for="file-materi">File Materi</label><br>
                    <input type="file" name="file_materi" class="form-control-file" id="file-materi">
                </div>
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select class="form-control" id="mapel" name="mapel">
                        <option>IPA</option>
                        <option>MTK</option>
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

<?php include 'view/footer.php';?>