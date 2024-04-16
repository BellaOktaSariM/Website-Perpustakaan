<?php
// Load file koneksi.php
include "koneksi.php";

// htmlspecialchars untuk menanggani pembobolan lewat inputan
// Ambil Data yang Dikirim dari Form
$nama 		= htmlspecialchars($_POST['nama']);
$nomor		= htmlspecialchars($_POST['nomor']);
$alamat		= htmlspecialchars($_POST['alamat']);
$ig 		= htmlspecialchars($_POST['ig']);
$fb 		= htmlspecialchars($_POST['fb']);
$foto 		= $_FILES['foto']['name'];
$tmp 		= $_FILES['foto']['tmp_name'];
// var_dump($_POST);
echo $nama." - ".$nomor." - ".$alamat." - ".$ig." - ".$fb." - ".$foto." - ".$tmp."</br>";
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru 	= date('dmYHis').$foto;
echo $fotobaru."</br>";
// Set path folder tempat menyimpan fotonya
$path 		= "img/pustakawan/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query 	= "INSERT INTO pustakawan VALUES ('', '".$nama."', '".$nomor."', '".$alamat."', '".$ig."', '".$fb."', '".$fotobaru."')";
	$sql 	= mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	// var_dump($sql); die();
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
