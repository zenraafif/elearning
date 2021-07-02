<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 

<?php
    $sql = "SELECT * FROM kuis";
    $result = $conn->query($sql);

?>

<div class="container">
  <div class="row">
    <div class="col-12 mt-2">
    <h1>Kuis</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-12 mt-2 mb-3">
        <a href="kuis_tambah.php">
          <button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Kuis</button>
        </a>
      </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $key=>$value): ?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?= $value['judul_kuis']; ?></td>
              <td><?= date('j F, Y   ',strtotime($value['tanggal_mulai'])) ?></td>
              <td><?= date('j F, Y   ',strtotime($value['tanggal_selesai'])) ?></td>
              <td>
                <a type="button" class="btn btn-primary" href="kuis_pertanyaan.php?id=<?= $value['id_kuis']; ?>"><i class="far fa-eye"></i></a>
                <a type="button" class="btn btn-success" href="kuis_edit.php?id=<?= $value['id_kuis']; ?>"><i class="fas fa-edit"></i></a>
              <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'view/footer.php';?>
