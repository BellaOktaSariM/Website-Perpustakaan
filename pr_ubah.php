<?php
// Load file koneksi.php
include 'koneksi.php';
// require "index.php";
require 'h_head.php';
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM prestasi WHERE id='" . $id . "'";
$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="pr_p_ubah.php?id=<?= $id; ?>" enctype="multipart/form-data">
			<div class="order_details_table">
				<table class="table">
					<tr>
						<td>ID</td>
						<td><input class="form-control" type="text" name="id" value="<?= $data['id']; ?>" readonly="true"></td>
					</tr>
					<tr>
						<td>Nama Prestasi</td>
						<td><input class="form-control" type="text" name="nama" value="<?= $data['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Deskripsi Prestasi</td>
						<td><input class="form-control" name="deskrip" id="deskrip" cols="30" rows="10" value="<?= $data['deskrip']; ?>"></td>
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