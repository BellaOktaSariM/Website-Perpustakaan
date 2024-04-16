<?php
require 'header_berita.php';
// require "header.php";

$key = $_GET['cari']; //untuk form yang bulet, kalo $_GET untuk form kotak
$QueryString = "SELECT * FROM berita WHERE judul LIKE '%$key%' or tgl LIKE '%$key%' ORDER BY tgl DESC";
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
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Berita Terbaru</h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php foreach ($hasil as $bt) : ?>
                    <!-- single product -->
                    <div class="col-lg-4">
                        <div class="single-product">
                            <div class="blog_post blog_info">
                                <img class="img-fluid" src="img/berita/<?= $bt['foto']; ?>" alt="">
                                <div class="product-details">
                                    <a href="informasibt.php?id=<?= $bt['id']; ?>">
                                        <h6>
                                            <?= $bt['judul']; ?>
                                        </h6>
                                    </a>
                                    <p class="text-left">
                                        <?= $bt['desing']; ?>
                                    </p>
                                    <ul  class="blog_meta text-center">                                
                                        <a href="informasibt.php?id=<?php echo $bt['id']; ?>" class="btn btn-info">
                                            INFORMASI
                                        </a>
                                        <a class="btn">
                                            <?= $bt['tgl']; ?>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<!-- <a class="link" href="index.php">kembali</a> -->

<?php include "footerdpn.php"; ?>