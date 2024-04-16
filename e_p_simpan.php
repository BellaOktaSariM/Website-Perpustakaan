<?php
// Load file koneksi.php
include "koneksidpn.php";

// function tambah($data)
// {

global $koneksi;

$judul      = htmlspecialchars($_POST['judul']);
$pengarang  = htmlspecialchars($_POST['pengarang']);
$baca       = htmlspecialchars($_POST['baca']);
$foto       = $_FILES['foto']['name'];
$namafoto   = $_FILES['foto']['tmp_name'];
$berkas     = $_FILES['berkas']['name'];
$namaberkas = $_FILES['berkas']['tmp_name'];

$nfoto      = date('dmYHis') . $foto;
$pfoto      = "img/buku/" . $nfoto;

//rename nama foto dengan menambahkan tanggal dan waktu
$rename     = date('dmYHis') . $berkas;

//set tempat menyimpan berkas
$pindah     = "file/" . $rename;

// Proses simpan ke Database
$query     = "INSERT INTO ebook VALUES('','" . $judul . "','" . $pengarang . "', '" . $baca . "', '" . $nfoto . "','" . $rename . "')";
$sql     = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

if (move_uploaded_file($namafoto, $pfoto)) {
    // Proses simpan ke Database
    if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: h_ebook.php?r='sukses'"); // Redirect ke halaman index.php
    } else {
        // Jika Gagal, Lakukan :
        header("location: e_simpan.php?r='gagal'");
        // echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        // echo "<br><a href='e_simpan.php'>Kembali Ke Form</a>";
    }
} else {
    // Jika gambar gagal diupload, Lakukan :
    header("location: e_simpan.php?r='gagal'");
    // echo "Maaf, gambar gagal untuk upload data.";
    // echo "<br><a href='e_simpan.php'>Kembali Ke Form</a>";
}

// Proses upload
if (move_uploaded_file($namaberkas, $pindah)) { // Cek apakah gambar berhasil diupload atau tidak

    if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: h_ebook.php?r='sukses'"); // Redirect ke halaman index.php
    } else {
        // Jika Gagal, Lakukan :
        header("location: e_simpan.php?r='gagal'");
        // echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        // echo "<br><a href='e_simpan.php'>Kembali Ke Form</a>";
    }
} else {
    // Jika gambar gagal diupload, Lakukan :
    header("location: e_simpan.php?r='gagal'");
    // echo "Maaf, gagal untuk upload data.";
    // echo "<br><a href='e_simpan.php'>Kembali Ke Form</a>";
}
