<?php require "h_head.php"; ?>

<section class="order_details section_gap">
	<div class="container">
		<form method="post" action="pp_p_simpan.php" enctype="multipart/form-data">
			<div class="order_details_table">
				<table class="table">
					<tr>
						<td>Visi</td>
						<td><textarea class="form-control" name="visi" id="visi" cols="20" rows="5"></textarea></td>
					</tr>
					<tr>
						<td>Misi</td>
						<td><textarea  class="form-control" name="misi" id="misi" cols="20" rows="5"></textarea></td>
					</tr>
					<tr>
						<td>Program Perpustakaan</td>
						<td><textarea class="form-control" name="program" id="program" cols="20" rows="5"></textarea></td>
					</tr>
					<tr>
						<td>Tata Tertib</td>
						<td><textarea class="form-control" name="ttb" id="ttb" cols="20" rows="5"></textarea></td>
					</tr>
					<tr>
						<td>SOP</td>
						<td><textarea class="form-control" name="sop" id="sop" cols="20" rows="5"></textarea></td>
					</tr>
					<!-- readonly="true" -->
					<tr>
						<td>Struktur Organisasi Perpus</td>
						<td><input type="file" name="foto" required></td>
					</tr>
				</table>
				<hr>
				<input type="submit" class="btn btn-info" value="SIMPAN">
                <a href="h_perpustakaan.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
                    BATAL
                </a>
			</div>
		</form>
	</div>
</section>

<?php include "footer.php"; ?>