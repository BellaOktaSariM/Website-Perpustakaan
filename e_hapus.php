<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id         = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query      = "SELECT * FROM ebook WHERE id='" . $id . "'";

$sql        = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data       = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

if (is_file("file/" . $data['berkas']))
    unlink("file/" . $data['berkas']);

if (is_file("img/buku/" . $data['foto']))
    unlink("img/buku/" . $data['foto']);

$query2  = "DELETE FROM ebook WHERE id = '" . $id . "'";
$sql2    = mysqli_query($koneksi, $query2);

// // Query untuk menghapus data siswa berdasarkan NIS yang dikirim
// $query2 = "DELETE FROM ebook WHERE id='" . $id . "'";
// $sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if ($sql2) { // Cek jika proses sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: h_ebook.php"); // Redirect ke halaman index.php
} else {
    // Jika Gagal, Lakukan :
    echo "Data gagal dihapus. <a href='h_ebook.php'>Kembali</a>";
}
