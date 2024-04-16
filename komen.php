<?php
// Load file koneksi.php
include "koneksidpn.php";

// function tambah($data)
// {

//     global $koneksi;

    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $kritik = htmlspecialchars($_POST['kritik']);
    $saran  = htmlspecialchars($_POST['saran']);

    // isi data 
    $kirim  = "INSERT INTO komen VALUES ('', '$nama', '$email', '$kritik', '$saran') ";

    $sql    = mysqli_query($koneksi, $kirim);

    // return mysqli_affected_rows($koneksi);
// }
if ($sql) {
    // echo "Terimakasih";
    header("location: index.php?r='sukses'"); // Redirect ke halaman index.php , location: index.php?pesan=input
} else {
    header("location: form_simpan.php?r='gagal'");
    // echo "Kritik & Saran tidak terkirim";
    // echo "<br><a href='index.php'>Kembali</a>";
}