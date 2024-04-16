<?php 
    require "header_index.php";

    $perpus    = query("SELECT * FROM perpus");
    $berita    = query("SELECT * FROM berita ORDER BY tgl DESC LIMIT 5");
?>

<br><br><br>

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<a href="buku.php">
								<img src="img/features/magazine.png" width="30px" height="30" alt="">
							</a>
                        </div>
                        <a href="buku.php">
                            <h6>Buku</h6>
                        </a>
						<!-- <p>Free Shipping on all order</p> -->
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<a href="ebook.php">
								<img src="img/features/folder.png" width="30px" height="30" alt="">
							</a>
							</div>
                            <a href="ebook.php">
                                <h6>E-Book</h6>
                            </a>    
                            <!-- <p>Free Shipping on all order</p> -->
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<a href="berita.php">
								<img src="img/features/paper.png" width="30px" height="30" alt="">
							</a>
						</div>
						<a href="berita.php">
                            <h6>Berita</h6>
                        </a>
						<!-- <p>Free Shipping on all order</p> -->
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<a href="pustakawan.php">
								<img src="img/features/avatar.png" width="30px" height="30" alt="">
							</a>
                        </div>
                        <a href="pustakawan.php">
                            <h6>Pustakawan</h6>
                        </a>
						<!-- <p>Free Shipping on all order</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- End Banner Area -->
	<div class="container">
		<div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                    
                        <?php foreach ($perpus as $pus) : ?>
                        <section class="features-area section_gap">
                        <div class="container">
                            <div class="row features-inner">
                                <!-- single features -->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features">
                                        <h4>VISI</h4>
                                        <p align="center">
                                            <?= $pus["visi"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features">
                                        <h4>MISI</h4>
                                        <p align="center">
                                        <?= $pus["misi"]; ?>
                                            <!-- 1. Peningkatan pelayanan pemakai dengan memberikan pelayanan yang penuh.<br>
                                            2. Peningkatan sarana penunjang untuk pemakai.<br>
                                            3. Peningkatan sumber daya manusia dengan pengikutsertaan pengelola dalam setiap even kegiatan perpustakaan.<br>
                                            4. Menyediakan sumber informasi dan ilmu pengetahuan yang menunjang proses pembelajaran dan pendidikan di sekolah dan masyarakat. -->
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
                                        <p align="center">
                                            <?= $pus["ttb"]; ?>
                                            <!-- 1. Peminjam harus memiliki kartu anggota perpustakaan.<br>
                                            2. peminjam hanya diperbolehkan meminjam satu buku dalam satu minggu.<br>
                                            3. Peminjam diwajibkan memelihara kebersihan dan keutuhan buku.<br>
                                            4. Peminjam harus mengembalikan buku perpustakaan sesuai dengan waktu yang telah ditentukan.<br>
                                            5. Keterlambatan pengembalian buku akan dikenakan sanksi berupa tidak diperbolehkan meminjam buku perpustakaan selama waktu Keterlambatan pengembalian buku.<br>
                                            6. Apabila buku rusak atau hilang peminjam dikenakan sanksi mengganti dengan buku yang sama atau mengganti dengan buku yang seharga pada saat itu. -->
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features">
                                        <h4>SOP</h4>
                                        <p align="center">
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
                    <?php endforeach;?>
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
                        <!-- Berita -->
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            
                            <?php foreach ($berita as $bt) : ?>
                                <div class="media post_item">
                                    <img src="img/berita/<?= $bt['foto']; ?>" alt="post" width="100px" height="60px">
                                    <div class="media-body">
                                        <a href="informasibt.php?id=<?= $bt['id']; ?>">
                                            <h3><?= $bt['judul']; ?></h3>
                                        </a>
                                        <p><?= $bt['tgl']; ?></p>
                                    </div>
                                </div> 
                            <?php endforeach; ?>
        
                        </aside>

                        <div class="br"></div>
                        
                        <!-- Kategori Buku -->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori Buku</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="k_tematik.php" class="d-flex justify-content-between">
                                        <p>Tematik</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="k_novel.php" class="d-flex justify-content-between">
                                        <p>Novel</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="k_mtk.php" class="d-flex justify-content-between">
                                        <p>Matematika</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="k_ensiklopedia.php" class="d-flex justify-content-between">
                                        <p>Ensiklopedia</p>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="k_kamus.php" class="d-flex justify-content-between">
                                        <p>Kamus</p>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="k_bucer.php" class="d-flex justify-content-between">
                                        <p>Buku Cerita</p> 
                                    </a>
                                </li>
                                <li>
                                    <a href="k_agama.php" class="d-flex justify-content-between">
                                        <p>Agama</p> 
                                    </a>
                                </li>
                                <li>
                                    <a href="k_kemu.php" class="d-flex justify-content-between">
                                        <p>Kemuhammadiyahan</p> 
                                    </a>
                                </li>
                                <li>
                                    <a href="k_barab.php"" class="d-flex justify-content-between">
                                        <p>Bahasa Arab</p> 
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="k_majalah.php" class="d-flex justify-content-between">
                                        <p>Majalah</p> 
                                    </a>
                                </li>
                                <li>
                                    <a href="k_koran.php" class="d-flex justify-content-between">
                                        <p>Koran</p> 
                                    </a>
                                </li> -->
                                <li>
                                    <a href="k_dll.php" class="d-flex justify-content-between">
                                        <p>dll</p> 
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </section>
</div>

<?php include "footerdpn.php"; ?>