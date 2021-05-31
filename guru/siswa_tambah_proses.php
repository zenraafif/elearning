<?php 
$conn = mysqli_connect('localhost','root','','sip_elearning');
var_dump($_POST);
    $nama     = $_POST['nama_user'];
    $username     = $_POST['username']; 
    $role     = $_POST['role']; 
    $password     = $_POST['password']; 
    $query = "INSERT INTO user (nama_user,username,role,password) values ('$nama','$username','$role','$password')";
    "INSERT INTO `user`(`nama_user`, `username`, `password`, `role`) VALUES ($nama,$nama,$nama,$nama)";
    echo $query;
    if ($query) {
    	echo "Gagal Tambah Data";
    }
 ?>