<?php
	// Konfigurasi Database
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'hewanlangka_db';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if($conn->connect_error){
		echo "Error: Gagal Koneksi Ke Database. <br>";
		echo "Debugging error : ".$conn->connect_error;
		exit();
	}

?>