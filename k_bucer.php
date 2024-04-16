<?php require "header.php"; 
    $bucer = query("SELECT * FROM buku where kategori = 'Buku Cerita' ORDER BY id_buku DESC");
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Buku Cerita</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="buku.php">Buku<span class="lnr lnr-arrow-right"></span></a>
					<a href="k_bucer.php">Buku Cerita</a>
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
                    <!-- <li class="main-nav-list"><a href="k_kamus.php">Kamus -->
                            <!--<span class="number">(29)</span>--></a></li>
                    <li class="main-nav-list"><a href="k_bucer.php">Buku Cerita
                            <!--<span class="number">(29)</span>--></a></li>
                    <li class="main-nav-list"><a href="k_agama.php">Agama
                            <!--<span class="number">(29)</span>--></a></li>
                    <li class="main-nav-list"><a href="k_kemu.php">Kemuhammadiyahan
                            <!--<span class="number">(29)</span>--></a></li>
                    <li class="main-nav-list"><a href="k_barab.php">Bahasa Arab
                            <!--<span class="number">(29)</span>--></a></li>
                    <!-- <li class="main-nav-list"><a href="k_majalah.php">Majalah -->
                            <!--<span class="number">(29)</span>--></a></li>
                    <!-- <li class="main-nav-list"><a href="k_koran.php">Koran -->
                            <!--<span class="number">(29)</span>--></a></li>
                    <li class="main-nav-list"><a href="k_dll.php">dll
                            <!--<span class="number">(29)</span>--></a></li>
                </ul>
            </div>
        </div>            

        <div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
                    <?php foreach ($bucer as $buku) : ?>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid"  src="img/buku/<?= $buku['foto']; ?>" alt="">
                                <div class="product-details">
                                    <div class="text-center">
                                        <h6>
                                            <?php echo $buku["judul"]; ?>
                                        </h6>
                                    </div>
                                    <div class="price">
                                        <h6>Penulis : <?php echo $buku["pengarang"]; ?></h6>
                                    </div>
                                    <div class="blog_post blog_info">
                                        <ul class="blog_meta text-center">
                                            <a href="informasi.php?id=<?= $buku['id_buku']; ?>" class="btn btn-info">
												INFORMASI
											</a>
                                        </ul>
                                        <ul class="blog_meta text-center">
                                            <!-- <li>
                                                <a href="<?= $buku['baca']; ?>">Baca Sekarang</a>
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

<br>

<?php include "footerdpn.php"; ?>