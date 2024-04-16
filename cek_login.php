<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	// mysqli_fetch_assoc hanya berupa array(nama field)
	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:h_admin.php?r='admin'");

	// cek jika user login sebagai pegawai
	}
	// else if($data['level']=="anggota"){
	// 	// buat session login dan username
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['level'] = "anggota";
	// 	// alihkan ke halaman dashboard pegawai
	// 	header("location:h_anggota.php");
	// }
	else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan='gagal'");
	}	
}else{
	header("location:login.php?pesan='gagal'");
}