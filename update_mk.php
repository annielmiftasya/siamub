<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mata Kuliah</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<style>
	body{
	    background-image: url("p.png");
	}
</style>
<body>
<div class="container">
	<div class="card mt-5">
	  <div class="card-header bg-primary text-white">
		Form Update Data Dosen
	  </div>
	  <div class="card-body">
	  	<form method="POST" action="update_mk.php">
		<?php
		include "koneksi.php";
		$id=$_GET['kd'];
		$qr="Select * from mata_kuliah where kode_mk='$id'";
		$data=mysqli_query($kon,$qr);
	
		//echo $qr;
		while($d=mysqli_fetch_array($data)){
		
		?>
				<div class="form-group">
					<label>Kode Mata Kuliah</label>
					<input type ="text" name="kd_mk" value="<?php echo $d['kode_mk'] ?>" class="form-control" placeholder="Masukkan Kode disini" required>
				</div>
				<div class="form-group">
					<label>Nama Mata Kuliah</label>
					<input type ="text" name="nama_mk" value="<?php echo $d['nama_mk'] ?>" class="form-control" placeholder="Masukkan Nama Mata Kuliah anda disini" required>
				</div>
				<div class="form-group">
					<label>SKS</label>
					<input type ="text" name="sks" value="<?php echo $d['sks'] ?>" class="form-control" placeholder="Masukkan SKS anda disini" required>
				</div>
				<button type="submit" class="btn btn-success" name="simpan">Update</button>
		
		</form>
	<?php
		}
	
		if(isset($_POST['simpan'])){
			$kd=$_POST['kd_mk'];
			$nm=$_POST['nama_mk'];
			$sks_mhs=$_POST['sks'];
			
			$qr="Update mata_kuliah set nama_mk='$nm', sks=$sks_mhs where kode_mk='$kd'";
			
			mysqli_query($kon,$qr);
			
			header("location:tampil_mk.php");
			
		}
	?>
		
		</table>
	</div>
	</div>
	
	
</div>

</body>

</html>