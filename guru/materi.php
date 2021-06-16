<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 

<?php
    $sql = "SELECT * FROM user WHERE role ='siswa'";
    $result = $conn->query($sql);

?>

<div class="container">
  <div class="row">
    <div class="col-12 mt-2">
    <h1>Materi</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-12 mt-2 mb-3">
        <a href="materi_tambah.php">
          <button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Materi</button>
        </a>
      </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Article Name</th>
            <th scope="col">Author</th>
            <th scope="col">Shares</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $key=>$value): ?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?= $value['username']; ?></td>
              <td><?= $value['role']; ?></td>
              <td>2.846</td>
              <td>
                <a type="button" class="btn btn-primary" href="siswa_detail.php?id=<?= $value['id_user']; ?>"><i class="far fa-eye"></i></a>
                <a type="button" class="btn btn-success" href="siswa_edit.php?id=<?= $value['id_user']; ?>"><i class="fas fa-edit"></i></a>
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
