<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id_buku	= $_POST['id_buku'];

// Ambil Data yang Dikirim dari Form
$judul 		= htmlspecialchars($_POST['judul']);
$pengarang	= htmlspecialchars($_POST['pengarang']);
$edisi 		= htmlspecialchars($_POST['edisi']);
$kategori 	= htmlspecialchars($_POST['kategori']);
$penerbit 	= htmlspecialchars($_POST['penerbit']);
$thn_tb 	= htmlspecialchars($_POST['thn_tb']);
$rak 		= htmlspecialchars($_POST['rak']);
$jdl_sr 	= htmlspecialchars($_POST['jdl_sr']);
// $no_pgl		= htmlspecialchars($_POST['no_pgl']);
$bahasa		= htmlspecialchars($_POST['bahasa']);
// $baca		= htmlspecialchars($_POST['baca']);
// $deskripsi_b = htmlspecialchars($_POST['deskripsi_b']);
$deskripsi_f = htmlspecialchars($_POST['deskripsi_f']);

// Cek apakah user ingin mengubah fotonya atau tidak
if (isset($_POST['ubah_foto'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis') . $foto;

	// Set path folder tempat menyimpan fotonya
	$path = "img/buku/" . $fotobaru;

	// Proses upload
	if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data kode buku berdasarkan NIS yang dikirim
		$query = "SELECT * FROM buku WHERE id_buku='" . $id_buku . "'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if (is_file("img/buku/" . $data['foto'])) // Jika foto ada
			unlink("img/buku/" . $data['foto']); // Hapus file foto sebelumnya yang ada di folder images

		// Proses ubah data ke Database
		$query = "UPDATE buku SET judul='" . $judul . "', pengarang='" . $pengarang . "', edisi='" . $edisi . "', kategori='" . $kategori . "', penerbit='" . $penerbit . "', thn_tb='" . $thn_tb . "', rak='" . $rak . "', jdl_sr='" . $jdl_sr . "', bahasa='" . $bahasa . "', deskripsi_f='" . $deskripsi_f . "', foto='" . $fotobaru . "' WHERE id_buku='" . $id_buku . "'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: h_admin.php?r='berhasil'"); // Redirect ke halaman index.php
		} else {
			// Jika Gagal, Lakukan :
			header("location: form_ubah.php?r='gagal'");
		}
	} else {
		// Jika gambar gagal diupload, Lakukan :
		header("location: form_ubah.php?r='gagal'");
	}
} else { // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE buku SET judul='" . $judul . "', pengarang='" . $pengarang . "', edisi='" . $edisi . "', kategori='" . $kategori . "', penerbit='" . $penerbit . "', thn_tb='" . $thn_tb . "', rak='" . $rak . "', jdl_sr='" . $jdl_sr . "', bahasa='" . $bahasa . "' , deskripsi_f='" . $deskripsi_f . "' WHERE id_buku='" . $id_buku . "'";
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: h_admin.php?r='berhasil'"); // Redirect ke halaman index.php
	} else {
		// Jika Gagal, Lakukan :
		header("location: form_ubah.php?r='gagal'");
	}
}