<!DOCTYPE html>
<html>
<head>
	<title>CARI DATA DOSEN</title>
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
		Form Cari Data Dosen
	  </div>
	  <div class="card-body">
	  	<form method="POST" action="caridata.php">
			<div class="form-group">
					<label>Cari Data</label>
					<input type ="text" name="nama" class="form-control" placeholder="Masukkan data yang anda cari disini" required>
				</div>
				<button type="submit" class="btn btn-danger" name="kirim">Cari</button>
		</form>
		</div>
	</div>
	
		<div class="card">
		 <div class="card-header bg-success text-white">
			Data Dosen
		  </div>
		<div class="card-body">	
		<form>
	  	<table class="table table-bordered table-striped">
		<tr>
			<th width="5px">NO</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th width="20px">Jenis Kelamin</th>
			<th width="20px">Tempat lahir</th>
			<th>Tanggal lahir</th>
			<th>Aksi</th>
		</tr>
			<?php
				if(isset($_POST['kirim'])){
					include "koneksi.php";
					$nm=$_POST['nama'];
					$no=1;
					
					$sql = "Select * from 036_dosen where nama like '%$nm%'";
					//echo $sql;
					$data=mysqli_query($kon,$sql);
				while ($d=mysqli_fetch_array($data)) {
					
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d["nip"]; ?></td>
					<td><?php echo $d["nama"]; ?></td>
					<td><?php echo $d["alamat"]; ?></td>
					<td><?php echo $d["jenis_kelamin"]; ?></td>
					<td><?php echo $d["tempat_lahir"]; ?></td>
					<td><?php echo $d["tgl_lahir"]; ?></td>
					<td>
					<a href="update_dosen.php?np=<?php echo $d["nip"]; ?>" class="btn btn-warning" align="center">UBAH</a>
					<a href="delete_dosen.php?np=<?php echo $d["nip"]; ?>" class="btn btn-danger" align="center">HAPUS</a>
				</td>
				</tr>

			<?php
				}
				}
			?>
			</form>
			</table>
			</div>
			</div>
			
	</div>
</body>

</html>