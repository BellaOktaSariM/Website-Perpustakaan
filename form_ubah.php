<?php
// Load file koneksi.php
include 'koneksi.php';
// require "index.php";
require 'h_head.php';
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id_buku = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM buku WHERE id_buku='" . $id_buku . "'";
$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="proses_ubah.php?id=<?= $id; ?>" enctype="multipart/form-data">
			<div class="order_details_table">
				<table class="table">
					<tr>
						<td>Kode Buku</td>
						<td><input class="form-control" type="text" name="id_buku" value="<?= $data['id_buku']; ?>"readonly="true"></td>
					</tr>
					<tr>
						<td>Judul Buku</td>
						<td><input class="form-control" type="text" name="judul" value="<?= $data['judul']; ?>"></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td><input class="form-control" type="text" name="pengarang" value="<?= $data['pengarang']; ?>"></td>
					</tr>
					<tr>
						<td>Edisi</td>
						<td><input class="form-control" type="text" name="edisi" value="<?= $data['edisi']; ?>"></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>
							<select name="kategori" id="kategori" required>
								<option value="<?= $data['kategori']; ?>"><?= $data['kategori']; ?></option>
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
						<td><input class="form-control" type="text" name="penerbit" value="<?= $data['penerbit']; ?>"></td>
					</tr>
					<tr>
						<td>Tahun Terbit</td>
						<td><input class="form-control" type="text" name="thn_tb" value="<?= $data['thn_tb']; ?>"></td>
					</tr>
					<tr>
						<td> Nomor Rak</td>
						<td><input class="form-control" type="text" name="rak" value="<?= $data['rak']; ?>"></td>
					</tr>
					<tr>
						<td>Bahasa</td>
						<td><input class="form-control" type="text" name="bahasa" value="<?= $data['bahasa']; ?>"></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>
							<input type="checkbox" name="ubah_foto" id="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>	
							<input type="file" id="foto" name="foto" disabled>
						</td>
					</tr>
				</table>
				<hr>
				<input type="submit" class="btn btn-info" value="UBAH">
				<a href="h_admin.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
					BATAL
				</a>
				</table>
			</div>
		</form>
	</div>
</section>
<!--================End Order Details Area =================-->

<?php include "footer.php"; ?>

<script>
	$(document).ready(function(e){
		$('#ubah_foto').change(function(e){
			var ischecked = $(this).is(':checked');
			if(ischecked){
				console.log('checked');
				document.getElementById('foto').disabled = false;
				document.getElementById('foto').required = true;
			}
			else if(!ischecked){
				console.log('unchecked');
				document.getElementById('foto').disabled = true;
				document.getElementById('foto').required = false;
			}
		});
	});
</script>