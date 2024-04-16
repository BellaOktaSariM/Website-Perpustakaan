<?php require "h_head.php"; ?>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="p_p_simpan.php" enctype="multipart/form-data">
			<div class="order_details_table">
				<table class="table">
					<tr>
						<td>Nama</td>
						<td><input class="form-control" type="text" name="nama" required></td>
					</tr>
					<tr>
						<td>Nomor</td>
						<td><input class="form-control" type="text" name="nomor" required></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input class="form-control" type="text" name="alamat" required></td>
					</tr>
					<tr>
						<td>Instagram</td>
						<td><input class="form-control" type="text" name="ig"><span> Copy link profil yang ada di Instagram anda dan taruh di kolom ini</span></td>
					</tr>
					<tr>
						<td>Facebook</td>
						<td><input class="form-control" type="text" name="fb"><span> Copy link profil yang ada di Facebook anda dan taruh di kolom ini</span></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" name="foto" required></td>
					</tr>
				</table>

				<hr>
				<input type="submit" class="btn btn-info" value="SIMPAN">
                <a href="h_pustakawan.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
                    BATAL
                </a>
			</div>
		</form>
	</div>
</section>

<?php include "footer.php"; ?>