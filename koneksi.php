<?php
	$kon = mysqli_connect("localhost","root","","db_akademik");
	
	//mengecek koneksi
	if(mysqli_connect_errno()){
		echo"Koneksi gagal : ".mysqli_connect_errno();
	}
		
?>