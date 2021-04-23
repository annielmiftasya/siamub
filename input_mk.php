<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mata Kuliah</title>
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
		Form Input Mata Kuliah
	  </div>
	  <div class="card-body">
	  	<form method="POST" action="input_mk.php">
			<div class="form-group">
					<label>Kode Mata Kuliah</label>
					<input type ="text" name="kd_mk" class="form-control" placeholder="Masukkan Kode disini" required>
				</div>
				<div class="form-group">
					<label>Nama Mata Kuliah</label>
					<input type ="text" name="nama_mk" class="form-control" placeholder="Masukkan Nama Mata Kuliah anda disini" required>
				</div>
				<div class="form-group">
					<label>SKS</label>
					<input type ="text" name="sks" class="form-control" placeholder="Masukkan SKS anda disini" required>
				</div>
				<button type="submit" class="btn btn-success" name="kirim">Simpan</button>
				<button type="reset" class="btn btn-danger" name="breset">Reset</button>
			</div>
		</form>
	</div>
	</div>
	
	
</div>
<?php
	include "koneksi.php";
	
	if(isset($_POST['kirim'])){
		$kd=$_POST['kd_mk'];
		$nm=$_POST['nama_mk'];
		$sks_mhs=$_POST['sks'];
		
		mysqli_query($kon,"insert into mata_kuliah(kode_mk,nama_mk,sks) values ('$kd','$nm',$sks_mhs)");
		
		header("location:tampil_mk.php");
		
	}
?>
</body>

</html>