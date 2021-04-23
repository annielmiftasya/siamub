<!DOCTYPE html>
<html>
<head>
	<title>Update Data Dosen</title>
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
		Form Input Data Dosen
	  </div>
	  <div class="card-body">
	  	<form method="POST" action="update_dosen.php">
		<?php
			include "koneksi.php";
			$id=$_GET['np'];
			$qr="Select * from 036_dosen where nip='$id'";
			$data=mysqli_query($kon, $qr );
			
			//echo $qr;
		while ($d=mysqli_fetch_array($data)) {
		?>
			<div class="form-group">
					<label>NIP</label>
					<input type ="text" name="nip_dos" value="<?php echo $d['nip'] ?>" class="form-control" placeholder="Masukkan NIP anda disini" required>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type ="text" name="nama_dos" value="<?php echo $d['nama'] ?>" class="form-control" placeholder="Masukkan nama anda disini" required>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type ="text" name="almt_dos" value="<?php echo $d['alamat'] ?>" class="form-control" placeholder="Masukkan alamat anda disini" required>
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<input type ="text" name="jk_dos" value="<?php echo $d['jenis_kelamin'] ?>" class="form-control" placeholder="Masukkan jenis kelamin anda disini" required>
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type ="text" name="TL_dos" value="<?php echo $d['tempat_lahir'] ?>"  class="form-control" placeholder="Masukkan tempat lahir anda disini" required>
				</div>
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type ="date" name="tgl_dos" value="<?php echo $d['tgl_lahir'] ?>" class="form-control" placeholder="Masukkan tanggal lahir anda disini" required>
				</div>
				<button type="submit" class="btn btn-success" name="simpan">Update</button>
		
		</form>
	<?php
		}
		if(isset($_POST['simpan'])){
			$nip = $_POST['nip_dos'];
			$nama= $_POST['nama_dos'];
			$alamat = $_POST['almt_dos'];
			$jk = $_POST['jk_dos'];
			$tempat = $_POST['TL_dos'];
			$tanggal = $_POST['tgl_dos'];
		$qr="Update 036_dosen set nama='$nama',alamat='$alamat', jenis_kelamin='$jk', tempat_lahir='$tempat', tgl_lahir='$tanggal' where nip='$nip'";	
		mysqli_query($kon,$qr);
		header("location:index.php");
		}
	?>
		
		</table>
	</div>
	</div>
	
	
</div>

</body>

</html>