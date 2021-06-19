<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 

<?php
    $sql = "SELECT * FROM mapel";
    $result = $conn->query($sql);

?>

<div class="container">
  <div class="row">
    <div class="col-12 mt-2">
    <h1>Mata Pelajaran</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-12 mt-2 mb-3">
        <a href="mapel_tambah.php">
          <button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Mata Pelajaran</button>
        </a>
      </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $key=>$value): ?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?= $value['nama']; ?></td>
              <td>
                <a type="button" class="btn btn-primary" href="mapel_detail.php?id=<?= $value['id_mapel']; ?>"><i class="far fa-eye"></i></a>
                <a type="button" class="btn btn-success" href="mapel_edit.php?id=<?= $value['id_mapel']; ?>"><i class="fas fa-edit"></i></a>
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
