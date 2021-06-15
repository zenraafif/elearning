<?php
			$nama = $_POST['nama_user'];
			$username = $_POST['username']; 
			$role = $_POST['role']; 
			$password = $_POST['password']; 

			$sql = "UPDATE user (nama_user, username, password, role)
			VALUES ('$nama', '$username', '$password', '$role')";
            $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

			if ($conn->query($sql) === TRUE) {
				echo "<script>
				    swal({
				        title:'Sukses',
				        text:'Siswa berhasil ditambahkan',
				        icon:'success',
				        timer:2000,
				        buttons:false
				        }).then(()=>{
				            window.location.href='index.php';
				            })
				    </script>";
			} else {
				      echo "<script>
				          swal({
				              title:'Gagal',
				              text:'Siswa gagal ditambahkan".$conn->error."',
				              icon:'error',
				              timer:2000,
				              buttons:false
				              }).then(()=>{
				                  window.location.href='login.html';
				                  })
				          </script>";
					// echo "Error: " . $sql . "<br>" . $conn->error;
			};

			$conn->close();

		?>