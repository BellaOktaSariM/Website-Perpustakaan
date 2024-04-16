<?php require "header.php"; ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Majalah</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="buku.php">Buku<span class="lnr lnr-arrow-right"></span></a>
					<a href="k_majalah.php">Majalah</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<br>
				<div class="head">Kategori Buku</div>
				<ul class="main-categories">
					<li class="main-nav-list"><a href="k_tematik.php">Tematik
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_novel.php">Novel
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_mtk.php">Matematika
							<!--<span class="number">(24)</span>--></a></li>
					<li class="main-nav-list"><a href="k_ensiklopedia.php">Ensiklopedia
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_kamus.php">Kamus
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_bucer.php">Buku Cerita
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_agama.php">Agama
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_kemu.php">Kemuhammadiyahan
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_barab.php">Bahasa Arab
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_majalah.php">Majalah
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_koran.php">Koran
							<!--<span class="number">(29)</span>--></a></li>
					<li class="main-nav-list"><a href="k_dll.php">dll
							<!--<span class="number">(29)</span>--></a></li>
				</ul>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<!-- Start Filter Bar -->
			<?php
			include "koneksi.php";
			if (isset($_GET['cari'])) {
				$cari = $_GET['cari'];
				$query = mysqli_query($koneksi, "SELECT * FROM buku where kategori = 'Majalah' and judul like '%$cari%' or pengarang like '%$cari%'");
			} else {
				$n = isset($_GET['page']) ? $_GET['page'] : 1;
				$limit_awal = $n * 8 - 7;
				$limit_akhir = $limit_awal + 8;
				$query = mysqli_query($koneksi, "SELECT * FROM buku where kategori = 'Majalah' limit $limit_awal, $limit_akhir");

				$banyak = mysqli_query($koneksi, "SELECT count(id) FROM buku where kategori='Majalah'");
				$banyak_data = mysqli_fetch_array($banyak)[0];
			} ?>
			<?php if (mysqli_num_rows($query) > 0) { ?>

				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
							while ($data = mysqli_fetch_array($query)) {
								?>
							<div class="col-lg-4 col-md-6">
								<div class="single-product">
									<img class="img-fluid" src="img/buku/<?php echo $data['foto']; ?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"]; ?>
											</h6>
										</div>
										<ul class="price">
											<h6>Penulis : <?php echo $data["pengarang"]; ?></h6>
											<ul class="blog_post blog_info">
												<ul class="blog_meta text-center">
													<li>
														<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Majalah" class="white_bg_btn">Informasi</a>
													</li>
												</ul>
												<ul class="blog_meta text-center">
													<!-- <li>
														<a href="<?= $data['baca']; ?>">Baca Sekarang</a>
													</li> -->
												</ul>
											</ul>
									</div>
								</div>
							</div>
					<?php }
					} ?>
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto"></div>
					<div class="pagination">
						<!-- <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a> -->
						<?php for ($i = 1; $i <= ceil($banyak_data / 9); $i++) { ?>
							<a href="?page=<?= $i; ?>"><?= $i; ?></a>
						<?php } ?>
						<!-- <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
					</div>
				</div>
		</div>
		<!-- End Filter Bar -->
	</div>
</div>
</div>

<br>

<?php include "footerdpn.php"; ?>