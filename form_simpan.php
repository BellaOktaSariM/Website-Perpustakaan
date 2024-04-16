<?php require "h_head.php"; 	
// session_start();
// if (isset($_POST['submit'])) {
// //    disini anda menangkap variabel form, melakukan validasi dan menginsert ke database
// //    dalam contoh ini saya tidak akan melakukan aksi tersebut dan aksi akan saya anggap berhasil
// //    sebelum redirect ke tabel user, daftarkan session pesan
//     $_SESSION['pesan'] = 'penambahan data berhasil';
//     echo '<script>window.location="h_admin.php"</script>';
// }
?>
<br>
<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
		<div class="order_details_table">
				<table class="table">
					<tbody>
						<tr>
							<td>Kode Buku</td>
							<td><input class="form-control" type="text" name="id_buku" required></td>
						</tr>
						<tr>
							<td>Judul Buku</td>
							<td><input class="form-control" type="text" name="judul" required></td>
						</tr>
						<tr>
							<td>Penulis</td>
							<td><input class="form-control" type="text" name="pengarang" required></td>
						</tr>
						<tr>
							<td>Edisi</td>
							<td><input class="form-control" type="text" name="edisi"></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td>
								<select name="kategori" id="kategori" required>
									<option value=""></option>
									<option value="Tematik">Tematik</option>
									<option value="Matematika">Matematika</option>
									<option value="Ensiklopedia">Ensiklopedia</option>
									<!-- <option value="Kamus">Kamus</option> -->
									<option value="Buku Cerita">Buku Cerita</option>
									<option value="Agama">Agama</option>
									<option value="Kemuhammadiyahan">Kemuhammadiyahan</option>
									<option value="Bahasa Arab">Bahasa Arab</option>
									<!-- <option value="Majalah">Majalah</option> -->
									<!-- <option value="Koran">Koran</option> -->
									<option value="Novel">Novel</option>
									<option value="dll">dll</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Penerbit</td>
							<td><input class="form-control" type="text" name="penerbit" required></td>
						</tr>
						<tr>
							<td>Tahun Terbit</td>
							<td><input class="form-control" type="text" name="thn_tb"></td>
						</tr>
						<tr>
							<td>Nomor Rak</td>
							<td><input class="form-control" type="text" name="rak"></td>
						</tr>
						<!-- <tr>
							<td>Judul Seri</td>
							<td><input class="form-control" type="text" name="jdl_sr"></td>
						</tr> -->
						<tr>
							<td>Bahasa</td>
							<td><input class="form-control" type="text" name="bahasa"></td>
						</tr>
						<tr>
							<td>Foto</td>
							<td><input type="file" name="foto" required></td>
						</tr>
						<tr>
							<td>
								<input type="submit" class="btn btn-info" value="SIMPAN">
								<a href="h_admin.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
									 BATAL
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
	</div>
</section>
<!--================End Order Details Area =================-->

<?php include "footer.php"; ?>