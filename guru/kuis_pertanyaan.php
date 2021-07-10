<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 
<?php

    if(isset($_GET["id"])){
      $id = $_GET["id"];
    }else{
      echo "<h3 class='m-3'>Data tidak ditemukan</h3>";
      exit;
    }
    
    $sql_quiz = "SELECT * FROM kuis WHERE id_kuis = $id";
    $kuis = $conn->query($sql_quiz);

    $sql_pertanyaan = "SELECT * FROM kuis_pertanyaan WHERE id_kuis='$id'";
    $pertanyaan = $conn->query($sql_pertanyaan);
    

    if ($kuis->num_rows > 0) {
        $detail_kuis = $kuis->fetch_assoc();
?>
          
 <div class="container-fluid">
    <div class="row">
        <div class="col-5 mt-3 mb-2">
          <div class="card">
            <h5 class="card-header bg-secondary text-light"><?= $detail_kuis['judul_kuis']?></h5>
            <div class="card-body">
              <p class="card-text">Mulai : <?= date('j F, Y   ',strtotime($detail_kuis['tanggal_mulai']))?></p>
              <p class="card-text">Selesai : <?= date('j F, Y   ',strtotime($detail_kuis['tanggal_selesai']))?></p>
              <p class="card-text">Waktu : <?= $detail_kuis['waktu']?> Menit</p>
              <a href="kuis_pertanyaan_tambah.php?id=<?= $detail_kuis['id_kuis']; ?>">
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12 mt-2 mb-3">
        <a href="kuis_pertanyaan_tambah.php?id=<?= $detail_kuis['id_kuis']; ?>">
          <button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Pertanyaan</button>
        </a>
      </div>
  </div>
    <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Pertanyaan</th>
            <th scope="col">Skor</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($pertanyaan as $key=>$value): ?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?= $value['pertanyaan']; ?></td>
              <td><?= $value['skor']; ?></td>
              <td>
                <a type="button" class="btn btn-success" href="kuis_pertanyaan_edit.php?id=<?= $value['id_pertanyaan']; ?>"><i class="fas fa-edit"></i></a>
                <a type="button" class="btn btn-danger" href="kuis_pertanyaan_delete.php?id_pertanyaan=<?= $value['id_pertanyaan']; ?>&id_kuis=<?= $id ?>"><i class="far fa-trash-alt"></i></a>

              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php } else { ?> 
  <h3 class='m-3'>Data tidak ditemukan</h3>
<?php }?>

<?php include 'view/footer.php';?>
