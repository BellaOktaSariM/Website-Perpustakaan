<?php
$koneksi = mysqli_connect("localhost","root","","per");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
function query($muncul){
	global $koneksi;//untuk memanggil variable koneksi
	$result	= mysqli_query($koneksi, $muncul);
	$rows	= [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row; 
	}
	return $rows;
}
