<?php
		include "koneksi.php";
		$kd=$_GET['np'];
		
		$qr = "Delete from 036_dosen where nip='$kd'";
		mysqli_query($kon,$qr);
			
		header("location:index.php");
?>