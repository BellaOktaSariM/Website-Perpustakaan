<?php
require 'header_berita.php';

$berita    = query("SELECT * FROM berita ORDER BY tgl DESC");
//ASC = mengurutkan data berdasarkan abjad dari kecil ke besar.
//DESC = mengurutkan data berdasarkan abjad dari besar ke kecil.
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Berita</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="berita.php">Berita</a>
                </nav>
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

                <?php foreach ($berita as $bt) : ?>
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

<?php include 'footerdpn.php'; ?>