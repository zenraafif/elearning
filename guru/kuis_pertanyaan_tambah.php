<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php
    $id = $_GET["id"];
?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Tambah Pertanyaan</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="kuis_pertanyaan_tambah_proses.php">
                <div class="form-group">
                    <label>Pertanyaan</label>
                    <textarea name="pertanyaan" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Pilihan A</label>
                    <input type="text" name="pilihan_a" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Pilihan B</label>
                    <input type="text" name="pilihan_b" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Pilihan C</label>
                    <input type="text" name="pilihan_c" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Pilihan D</label>
                    <input type="text" name="pilihan_d" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Skor</label>
                    <input type="number" name="skor" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Kunci Jawaban</label>
                    <select name="kunci_jawaban" class="form-control">
                        <option value="" selected disabled>-Pilih Kunci Jawaban-</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
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