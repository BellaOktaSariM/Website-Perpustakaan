<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id 		= $_GET['id'];

// Ambil Data yang Dikirim dari Form
$visi 		= htmlspecialchars($_POST['visi']);
$misi 		= htmlspecialchars($_POST['misi']);
$program 	= htmlspecialchars($_POST['program']);
$ttb 		= htmlspecialchars($_POST['ttb']);
$sop 		= htmlspecialchars($_POST['sop']);

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;
	
	// Set path folder tempat menyimpan fotonya
	$path = "img/perpus/".$fotobaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM perpus WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("img/perpus/".$data['foto'])) // Jika foto ada
			unlink("img/perpus/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE perpus SET visi='".$visi."', misi='".$misi."', program='".$program."', sop='".$sop."', ttb='".$ttb."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: h_perpustakaan.php?r='berhasil'"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			header("location: pp_ubah.php?r='gagal'");
			// echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			// echo "<br><a href='pp_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		header("location: pp_ubah.php?r='gagal'");
		// echo "Maaf, Gambar gagal untuk diupload.";
		// echo "<br><a href='pp_ubah.php'>Kembali Ke Form</a>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE perpus SET visi='".$visi."', misi='".$misi."', program='".$program."', sop='".$sop."', ttb='".$ttb."' WHERE id='".$id."'";
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: h_perpustakaan.php?r='berhasil'"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		// var_dump($id); die();
		header("location: pp_ubah.php?r='gagal'");
		// echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		// echo "<br><a href='pp_ubah.php'>Kembali Ke Form</a>";
	}
}
