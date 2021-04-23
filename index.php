<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="pen&pencil.css">
	  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar">
	  <h1>Sistem Informasi Dosen UB</h1>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#"></a>
		  </li>
	</div>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
	</div>
	</nav>
	</div>
		
	<style>
	.container{
		position:relative;
		margin-top:50px;
		left:20px
	}.topnav{
		margin-top:80px;
		background-color:#D4E6F1 ;
		text-align:center;
		font-size:20px;
	}body{
	    background-image: url("p.png");
	}
	</style>
	
</head>
<body>
		<div class="topnav">
		  <a href="index.php" style="color:red;margin-right:30px">DATA DOSEN</a>
		  <a href="tampil_mk.php" style="margin-left:30px;color:grey"> DATA MATA KULIAH</a>
		</div>
	<div class="container">
	<form method="POST" action="" class="form-inline my-2 my-lg-0">
		<a href="input_dosen.php" class="btn btn-warning" align="center">TAMBAH DATA</a>
		<a href="caridata.php" class="btn btn-danger" align="center">CARI DATA</a>
    </form>
	
	<div class="card">
		 <div class="card-header bg-success text-white">
			Data Dosen
		  </div>
	  <div class="card-body">
	  	<form method="post" action="">
	  	<table class="table table-bordered table-striped">
		<tr>
			<th width="5px">NO</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th width="20px">Jenis Kelamin</th>
			<th width="20px">Tempat lahir</th>
			<th>Tanggal lahir</th>
			<th width="20px">Aksi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$data=mysqli_query($kon,"Select * from 036_dosen");
			while($d=mysqli_fetch_array($data)){
		?> 
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d["nip"];?></td>
			<td><?php echo $d["nama"];?></td>
			<td><?php echo $d["alamat"];?></td>
			<td><?php echo $d["jenis_kelamin"];?></td>
			<td><?php echo $d["tempat_lahir"];?></td>
			<td><?php echo $d["tgl_lahir"];?></td>
			
			<td>
				<a href="update_dosen.php?np=<?php echo $d["nip"]; ?>" class="btn btn-warning" align="center">UBAH</a>
				<a href="delete_dosen.php?np=<?php echo $d["nip"]; ?>" class="btn btn-danger mt-1 " align="center">HAPUS</a>
			</td>
		</tr>
			
		<?php
			}
		?>
		</table>
	</div>
	<div>
	
</div>

</body>

</html>