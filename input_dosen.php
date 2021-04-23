<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Dosen</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	body{
	    background-image: url("p.png");
	}
	</style>
</head>
<body>
<div class="container">
	<div class="card mt-5">
	  <div class="card-header bg-primary text-white">
		Form Input Data Dosen
	  </div>
	  <div class="card-body">
	  	<form method="POST" action="input_dosen.php">
			<div class="form-group">
					<label>NIP</label>
					<input type ="text" name="nip_dos" class="form-control" placeholder="Masukkan NIP anda disini" required>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type ="text" name="nama_dos" class="form-control" placeholder="Masukkan nama anda disini" required>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type ="text" name="almt_dos" class="form-control" placeholder="Masukkan alamat anda disini" required>
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<input type ="text" name="jk_dos" class="form-control" placeholder="Masukkan jenis kelamin anda disini" required>
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type ="text" name="TL_dos" class="form-control" placeholder="Masukkan tempat lahir anda disini" required>
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type ="date" name="tgl_dos" class="form-control" placeholder="Masukkan tanggal lahir anda disini" required>
				</div>
				<button type="submit" class="btn btn-success" name="kirim">Simpan</button>
				<button type="reset" class="btn btn-danger" name="breset">Reset</button>
		
		</form>
	</div>
	</div>
	
	
</div>
<?php
	include "koneksi.php";
	
	if(isset($_POST['kirim'])){
		$nip=$_POST['nip_dos'];
		$nm=$_POST['nama_dos'];
		$almt=$_POST['almt_dos'];
		$jk=$_POST['jk_dos'];
		$tl=$_POST['TL_dos'];
		$tgl=$_POST['tgl_dos'];
		
		mysqli_query($kon,"insert into 036_dosen(nip,nama,alamat,jenis_kelamin,tempat_lahir,tgl_lahir) values ('$nip','$nm','$almt','$jk','$tl','$tgl')");
		
		header("location:index.php");
		
	}
	?>
</body>

</html>