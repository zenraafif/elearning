<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 
<?php
    $id = $_GET["id"];
    
    $sql_quiz = "SELECT * FROM kuis WHERE id_kuis = $id";
    $kuis = $conn->query($sql_quiz);

    $sql_pertanyaan = "SELECT * FROM kuis_pertanyaan";
    $pertanyaan = $conn->query($sql_pertanyaan);
    

    if ($kuis->num_rows > 0) {
        $detail_kuis = $kuis->fetch_assoc();
?>
          
 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h3><?= $detail_kuis['judul_kuis']?></h3>
            <h6>Mulai : <?= $detail_kuis['tanggal_mulai']?></h6>
            <h6>Selesai : <?= $detail_kuis['tanggal_selesai']?></h6>
            <h6>Waktu : <?= $detail_kuis['waktu']?> Menit</h6>
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
              <td><?= $value['judul_kuis']; ?></td>
              <td>
                <a type="button" class="btn btn-success" href="kuis_pertanyaan_edit.php?id=<?= $value['id_mapel']; ?>"><i class="fas fa-edit"></i></a>
              <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php } else { ?> 
    data ga ada
<?php }?>

<?php include 'view/footer.php';?>
