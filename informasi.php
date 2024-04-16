<?php
require "header_index.php";
$data = $koneksi->query("SELECT * FROM buku WHERE id_buku='{$_GET['id']}'");
$r = $data->fetch_array();
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Details Buku</h1>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="single-prd-item">
					<br><br>
					<img class="img-fluid-lgn" src="img/buku/<?= $r['foto']; ?>" alt="" width="630" height="630">
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h2><span><?= $r['judul']; ?></span></h2>
					<ul class="list">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<li>
											<h5><a id="pengarang"><span>Penulis</span>
									<td>: <?= $r['pengarang']; ?></a></h5>
										</li>
									</td>
								</tr>
								<tr>
									<td>
										<li>
											<h5><a id="penerbit"><span>Penerbit</span>
									<td>: <?= $r['penerbit']; ?></a></h5>
										</li>
									</td>
								</tr>
								<tr>
									<td>
										<li>
											<h5><a id="kategori"><span>Kategori</span>
									<td>: <?= $r['kategori']; ?></a></h5>
										</li>
									</td>
								</tr>
								<tr>
									<td>
										<li>
											<h5><a id="edisi"><span>Edisi</span>
									<td>: <?= $r['edisi']; ?></a></h5>
										</li>
									</td>
								</tr>
								<tr>
									<td>
										<li>
											<h5><a id="id_buku"><span>Kode Buku</span>
									<td>: <?= $r['id_buku']; ?></a></h5>
										</li>
									</td>
								</tr>
								<tr>
									<td>
										<li>
											<h5><a id="thn_tb"><span>Tahun Terbit</span>
									<td>: <?= $r['thn_tb']; ?></a></h5>
										</li>
									</td>
								</tr>
								<tr>
									<td>
										<li>
											<h5><a id="rak"><span>Nomor Rak</span>
									<td>: <?= $r['rak']; ?></a></h5>
										</li>
									</td>
								</tr>
								<!-- <tr>
									<td>
										<li>
											<h5><a id="jdl_sr"><span>Judul Seri</span>
									<td>: <?= $r['jdl_sr']; ?></a></h5>
										</li>
									</td>
								</tr> -->
								<tr>
									<td>
										<li>
											<h5><a id="bahasa"><span>Bahasa</span>
									<td>: <?= $r['bahasa']; ?></a></h5>
										</li>
									</td>
								</tr>
								<!-- <tr>
									<td>
										<li>
											<h5>
												<a id="baca"><span>Baca</span></a>
									<td>: <a href="<?= $r['baca']; ?>">Baca Online Sekarang</a>
										</h5>
										</li>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<li>
											<h5><a id="deskripsi_f"><span>Deskripsi Fisik</span>
									<td>: <?= $r['deskripsi_f']; ?></a></h5>
										</li>
									</td>
								</tr> -->
							</tbody>
						</table>
					</ul>
					<p></p>
					<!-- <p><?= $r['deskripsi_b']; ?></p> -->
					<div class="generic-btn info radius text-center">
						<a href="buku.php" class="genric-btn success radius text-center">
							Kembali
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->

<br>

<?php include "footerdpn.php"; ?>