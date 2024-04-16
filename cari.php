<?php
require 'header.php';
// require "header.php";

$key = $_GET['cari']; //untuk form yang bulet, kalo $_GET untuk form kotak
$QueryString = "SELECT * FROM buku WHERE judul LIKE '%$key%' or pengarang LIKE '%$key%' or penerbit LIKE '%$key%' or kategori LIKE '%$key%' ORDER BY id_buku DESC";
$hasil = mysqli_query($koneksi, $QueryString);
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Hasil Pencarian dari "<?= $key ?>"</h1>
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

			<!-- Start Filter Bar -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					<!-- single product -->
					<?php foreach ($hasil as $hs) : ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/buku/<?= $hs['foto']; ?>" alt="">
								<div class="product-details">
									<h6><?= $hs["judul"]; ?></h6>
									<div class="price">
										<h6>Pengarang : <?= $hs["pengarang"]; ?></h6>
									</div>
									<div class="blog_post blog_info">
										<ul class="blog_meta text-center">
											<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Tematik" class="btn btn-info">
												INFORMASI
											</a>
                                        </ul>
										<ul class="blog_meta text-center">
											<!-- <li>
												<a href="<?= $data['baca']; ?>">Baca Sekarang</a>
											</li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>
			<!-- End Best Seller -->
		</div>
	</div>
</div>

<!-- <a class="link" href="index.php">kembali</a> -->

<?php include "footerdpn.php"; ?>