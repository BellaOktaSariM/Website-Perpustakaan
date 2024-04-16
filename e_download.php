<?php
	include "koneksi.php";
	// if (isset($_GET['filename'])) {
	// 	$filename	= $_GET['filename'];
	// 	$query = mysqli_query($koneksi, "SELECT jumlah_unduh FROM ebook WHERE berkas = '$filename'")->fetch_array();
	// 		$add = $query['jumlah_unduh'] + 1;
	// 		// var_dump($add); 
	// 		// echo "$add";
	// 		// die();
	// 	
	// }
	if (isset($_GET['filename'])) {
		$filename	= $_GET['filename'];
		$jumlah = $_GET['j'];
		// $judul		= $_GET['judul']
		$back_dir	= "file/";
		$file		= $back_dir . $_GET['filename'];

		if (file_exists($file)) {
			
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($file));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: private');
			header('Pragma: private');
			header('Content-Length:' . filesize($file));
			ob_clean();
			flush();
			readfile($file);
			$query1 = mysqli_query($koneksi, "UPDATE ebook SET `jumlah_unduh`='$jumlah' WHERE berkas ='$filename'");	
			exit;
		} else {
			$_SESSION['pesan'] = "Oops! File - $filename - not found ...";
			header("location:ebook.php");
		}
	}
?>