<?php
// Load file koneksi.php
include "koneksi.php";

// htmlspecialchars untuk menanggani pembobolan lewat inputan
// Ambil Data yang Dikirim dari Form
$judul 		= htmlspecialchars($_POST['judul']);
$tgl    	= htmlspecialchars($_POST['tgl']);
$desing     = htmlspecialchars($_POST['desing']);
$deskrip    = htmlspecialchars($_POST['deskrip']);
$foto 		= $_FILES['foto']['name'];
$tmp 		= $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru 	= date('dmYHis') . $foto;

// Set path folder tempat menyimpan fotonya
$path 		= "img/berita/" . $fotobaru;

// Proses upload
if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query 	= "INSERT INTO berita VALUES('', '" . $judul . "','" . $tgl . "', '" . $desing . "','" . $deskrip . "', '" . $fotobaru . "')";
	$sql 	= mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: h_berita.php?r='sukses'"); // Redirect ke halaman index.php
	} else {
		// Jika Gagal, Lakukan :
		header("location: bt_simpan.php?r='gagal'");
		// echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		// echo "<br><a href='bt_simpan.php'>Kembali Ke Form</a>";
	}
} else {
	// Jika gambar gagal diupload, Lakukan :
	header("location: bt_simpan.php?r='gagal'");
	// echo "Maaf, Gambar gagal untuk diupload.";
	// echo "<br><a href='bt_simpan.php'>Kembali Ke Form</a>";
}
