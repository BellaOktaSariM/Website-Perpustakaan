<?php
require 'header_ebook.php';
// require "header.php";

$key = $_GET['cari']; //untuk form yang bulet, kalo $_GET untuk form kotak
$QueryString = "SELECT * FROM ebook WHERE judul LIKE '%$key%' or pengarang LIKE '%$key%' ORDER BY id DESC";
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

<!-- start product Area -->
<section class="owl-carousel active-product section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row">
                <?php foreach ($hasil as $ebk) : ?>
                    <!-- single product -->
                    <div class="card col-sm-4 pt-4 pb-4" style="width: 20rem;">
                       <img class="card-img-top img-fluid" src="img/buku/<?php echo $ebk['foto']; ?>" alt="">
                       <div class="card-body">
                            <h5 class="card-title"><?= $ebk['judul']; ?></h5>
                            <p class="card-text">Pengarang : <?= $ebk['pengarang']; ?></p>
                            <a href="<?= $ebk['baca']; ?>" class="btn btn-warning btn-sm"><span style="color:#f9fbe7;">Baca Sekarang</span></a>
                            &nbsp;
                            <a href="e_download.php?filename=<?= $ebk['berkas']; ?>&j=<?= $ebk['jumlah_unduh']+1?>" class="btn btn-primary btn-sm">Unduh</a>
                            <div class="mt-4">Telah diunduh sebanyak <b><?=$ebk['jumlah_unduh'];?></b> kali.</div>
                       </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<?php include "footerdpn.php"; ?>