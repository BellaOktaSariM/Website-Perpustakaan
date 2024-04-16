<?php
// Load file koneksi.php
include "koneksi.php";

// htmlspecialchars untuk menanggani pembobolan lewat inputan
// Ambil Data yang Dikirim dari Form
// var_dump($_POST);

$id_buku	= $_POST['id_buku'];
$judul 		= htmlspecialchars($_POST['judul']);
$pengarang	= htmlspecialchars($_POST['pengarang']);
$edisi 		= htmlspecialchars($_POST['edisi']);
$kategori 	= htmlspecialchars($_POST['kategori']);
$penerbit 	= htmlspecialchars($_POST['penerbit']);
$thn_tb 	= htmlspecialchars($_POST['thn_tb']);
$rak 		= htmlspecialchars($_POST['rak']);
$jdl_sr 	= '';
$bahasa		= htmlspecialchars($_POST['bahasa']);
// $baca		= htmlspecialchars($_POST['baca']);
// $deskripsi_b = htmlspecialchars($_POST['deskripsi_b']);
$deskripsi_f = '';
$foto 		= $_FILES['foto']['name'];
$tmp 		= $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru 	= date('dmYHis') . $foto;

// Set path folder tempat menyimpan fotonya
$path 		= "img/buku/" . $fotobaru;

// Proses upload
if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	// die();
	$query 	= "INSERT INTO buku VALUES('".$id_buku."', '" . $judul . "','" . $pengarang . "','" . $edisi . "','" . $kategori . "','" . $penerbit . "','" . $thn_tb . "','" . $rak . "','" . $jdl_sr . "','" . $bahasa . "','" . $deskripsi_f . "', '" . $fotobaru . "')";
	$sql 	= mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	// var_dump($sql); die();
	if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: h_admin.php?r='sukses'"); // Redirect ke halaman index.php
	} else {
		// Jika Gagal, Lakukan :
		header("location: form_simpan.php?r='gagal'");
	}
} else {
	// Jika gambar gagal diupload, Lakukan :
	header("location: form_simpan.php?r='gagal'");
}
