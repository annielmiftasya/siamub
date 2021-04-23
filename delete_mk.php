<?php
		include "koneksi.php";
		$kode=$_GET['kd'];
		
		$qr = "Delete from  mata_kuliah where kode_mk = '$kode'";
		mysqli_query($kon,$qr);
			
		header("location:tampil_mk.php");
?>