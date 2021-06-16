<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>

<?php require '../koneksi.php';?> 

<?php
    $sql = "SELECT * FROM user WHERE role ='siswa'";
    $result = $conn->query($sql);

?>


<!-- 4B7FD33E-37AF-4D5D-BC6C-9DED46D835D6 -->

<!-- <div class="container">
  <div class="row">
    <button type="button" class="btn btn-success"><i class="far fa-plus">Tambah Siswa</button>
  </div>
</div> -->


<div class="container">
  <div class="row">
    <div class="col-12 mt-2">
    <h1>Siswa</h1>
    </div>
  </div>
  <div class="row">
      <div class="col-12 mt-2 mb-3">
        <a href="siswa_tambah.php">
          <button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Siswa</button>
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
            <th scope="col">Email</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $key=>$value): ?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?= $value['nama']; ?></td>
              <td><?= $value['email']; ?></td>
              <td><?= $value['gender']; ?></td>
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
