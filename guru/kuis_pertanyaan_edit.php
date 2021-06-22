<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 
<?php
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM kuis_pertanyaan WHERE id_pertanyaan = $id";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        $pertanyaan = $result->fetch_assoc();
?>
          
 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Ubah Pertanyaan</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form  method="post" action="kuis_pertanyaan_edit_proses.php">
                <div class="form-group">
                    <input type="text" name="id_pertanyaan" class="form-control" value="<?= $pertanyaan["id_pertanyaan"]?>" hidden>
                    <input type="text" name="id_kuis" class="form-control" value="<?= $pertanyaan["id_kuis"]?>" hidden>
                </div>
                <div class="form-group">
                    <label>Pertanyaan</label>
                    <input type="text" name="pertanyaan" class="form-control" value="<?= $pertanyaan["pertanyaan"]?>">
                </div>  
                <div class="form-group">
                    <label>Pilihan A</label>  
                    <input type="text" name="pilihan_a" class="form-control" value="<?= $pertanyaan["pilihan_a"]?>">
                </div>  
                <div class="form-group">
                    <label>Pilihan B</label>     
                    <input type="text" name="pilihan_b" class="form-control" value="<?= $pertanyaan["pilihan_b"]?>">
                </div>  
                <div class="form-group">
                    <label>Pilihan C</label>                    
                    <input type="text" name="pilihan_c" class="form-control" value="<?= $pertanyaan["pilihan_c"]?>">
                </div>  
                <div class="form-group">
                    <label>Pilihan D</label>
                    <input type="text" name="pilihan_d" class="form-control" value="<?= $pertanyaan["pilihan_d"]?>">
                </div>
                <div class="form-group">
                    <label>Skor</label>
                    <input type="number" name="skor" class="form-control" value="<?= $pertanyaan['skor']?>">
                </div> 
                <div class="form-group">
                    <label>Kunci Jawaban</label>
                    <select name="kunci_jawaban" class="form-control">
                        <option value="a" <?php if($pertanyaan['kunci_jawaban'] == 'a'){echo 'selected';};?>>A</option>
                        <option value="b" <?php if($pertanyaan['kunci_jawaban'] == 'b'){echo 'selected';};?>>B</option>
                        <option value="c" <?php if($pertanyaan['kunci_jawaban'] == 'c'){echo 'selected';};?>>C</option>
                        <option value="d" <?php if($pertanyaan['kunci_jawaban'] == 'd'){echo 'selected';};?>>D</option>
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
    data ga ada
<?php }?>

<?php include 'view/footer.php';?>