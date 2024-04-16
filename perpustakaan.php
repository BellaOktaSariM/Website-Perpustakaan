<?php
require 'header.php';

$perpus	= query("SELECT * FROM perpus");

$i = 1;

?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
		</div>
	</div>
</section>
<!-- End Banner Area -->

<?php foreach ($perpus as $pus) : ?>


	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-features">
						<h4>VISI</h4>
						<p align="left">
							<?= $pus["visi"]; ?>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-features">
						<h4>MISI</h4>
						<p align="left">
							1. Peningkatan pelayanan pemakai dengan memberikan pelayanan yang penuh.<br>
							2. Peningkatan sarana penunjang untuk pemakai.<br>
							3. Peningkatan sumber daya manusia dengan pengikutsertaan pengelola dalam setiap even kegiatan perpustakaan.<br>
							4. Menyediakan sumber informasi dan ilmu pengetahuan yang menunjang proses pembelajaran dan pendidikan di sekolah dan masyarakat.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area features-area">
		<div class="container">
			<div class="row justify-content-center features-inner2">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="text-center">
						<h3>
							PROGRAM PERPUSTAKAAN
						</h3>
						<p class="center">
							<?= $pus["program"]; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-features">
						<h4>TATA TERTIB PEMINJAM PERPUSTAKAAN</h4>
						<p align="left">
							1. Peminjam harus memiliki kartu anggota perpustakaan.<br>
							2. peminjam hanya diperbolehkan meminjam satu buku dalam satu minggu.<br>
							3. Peminjam diwajibkan memelihara kebersihan dan keutuhan buku.<br>
							4. Peminjam harus mengembalikan buku perpustakaan sesuai dengan waktu yang telah ditentukan.<br>
							5. Keterlambatan pengembalian buku akan dikenakan sanksi berupa tidak diperbolehkan meminjam buku perpustakaan selama waktu Keterlambatan pengembalian buku.<br>
							6. Apabila buku rusak atau hilang peminjam dikenakan sanksi mengganti dengan buku yang sama atau mengganti dengan buku yang seharga pada saat itu.
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-features">
						<h4>SOP</h4>
						<p align="left">
							<?= $pus["sop"]; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start category Area -->
	<section class="category-area features-area">
		<div class="container">
			<div class="row justify-content-center features-inner3">
				<div class="text-center">
					<h3>
						STRUKTUR ORGANISASI PERPUSTAKAAN
					</h3>
					<div class="row justify-content-center align-items-center">
						<img src="img/perpus/<?= $pus["foto"]; ?>" weight="400" height="400" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>

<?php endforeach; ?>

<?php include 'footerdpn.php'; ?>