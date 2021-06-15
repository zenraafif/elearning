<?php include 'view/header.php';?>
<?php include 'view/sidebar.php';?>


 <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4 ">
            <h4>Tambah Siswa</h4>
        </div>
    </div>
    <div class="row mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="../guru">Guru</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Siswa</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="siswa_tambah_proses.php">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_user" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>
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