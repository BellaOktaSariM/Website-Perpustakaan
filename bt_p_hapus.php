<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query 	= "SELECT * FROM berita WHERE id='" . $id . "'";

$sql 	= mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query


$data 	= mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


// berita
// Cek apakah file fotonya ada di folder berita
if (is_file("img/berita/" . $data['foto'])) // Jika foto ada
	unlink("img/berita/" . $data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM berita WHERE id='" . $id . "'";
$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if ($sql2) { // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: h_berita.php"); // Redirect ke halaman index.php
} else {
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='berita.php'>Kembali</a>";
}
