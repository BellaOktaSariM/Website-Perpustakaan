<?php require "h_head.php"; ?>

<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="pr_p_simpan.php" enctype="multipart/form-data">
			<div class="order_details_table">
				<table class="table">
					<tr>
						<td>Nama Prestasi</td>
						<td><input class="form-control" type="text" name="nama" required></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td><textarea class="form-control" name="deskrip" id="deskrip" cols="30" rows="10"></textarea></td>
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