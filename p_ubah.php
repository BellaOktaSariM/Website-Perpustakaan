<?php
// Load file koneksi.php
include 'koneksi.php';
// require "index.php";
require 'h_head.php';
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM pustakawan WHERE id='" . $id . "'";
$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="p_p_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
			<div class="order_details_table">
				<table class="table">
					<tr>
						<td>ID</td>
						<td><input class="form-control" type="text" name="id" value="<?php echo $data['id']; ?>" readonly="true"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Nomor</td>
						<td><input class="form-control" type="text" name="nomor" value="<?php echo $data['nomor']; ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
					</tr>
					<tr>
						<td>Instagram</td>
						<td><input class="form-control" type="text" name="ig" value="<?php echo $data['ig']; ?>"></td>
					</tr>
					<tr>
						<td>Facebook</td>
						<td><input class="form-control" type="text" name="fb" value="<?php echo $data['fb']; ?>"></td>
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
                <a href="h_pustakawan.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
                    BATAL
                </a>
			</div>
		</form>
	</div>
</section>

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