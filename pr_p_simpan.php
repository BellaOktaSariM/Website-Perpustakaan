<?php
// Load file koneksi.php
include "koneksi.php";

// htmlspecialchars untuk menanggani pembobolan lewat inputan
// Ambil Data yang Dikirim dari Form
$nama 		= htmlspecialchars($_POST['nama']);
$deskrip	= htmlspecialchars($_POST['deskrip']);
$foto 		= $_FILES['foto']['name'];
$tmp 		= $_FILES['foto']['tmp_name'];
	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru 	= date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path 		= "img/prestasi/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query 	= "INSERT INTO prestasi VALUES('', '".$nama."', '".$deskrip."', '".$fotobaru."')";
	$sql 	= mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: h_pustakawan.php?r='sukses'"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		header("location: p_simpan.php?r='gagal'");
		// echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		// echo "<br><a href='p_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	header("location: p_simpan.php?r='gagal'");
	// echo "Maaf, Gambar gagal untuk diupload.";
	// echo "<br><a href='p_simpan.php'>Kembali Ke Form</a>";
}
