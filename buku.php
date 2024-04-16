<?php require"header.php"; ?>

<!-- mysqli_fetch_array = menghasilkan baris data menjadi pecahan array 
mysqli_fetch_assoc = tidak bisa membuat hasil baris data dengan index
-->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Halaman Buku</h1>
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
				
            <!-- slide buku -->
            <!-- start product Area -->
            <section class="owl-carousel active-product-area section_gap">

					<!-- kategori Tematik -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku WHERE kategori = 'Tematik' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Tematik</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
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
                                                </!-->
                                            </ul>
                                        </div>
									</div>
								</div>
							</div>
						<?php }} ?>
							</div>
						</div>
					</div>

					<!-- Kategori Novel -->
                    <!-- single product slide -->
                    <?php include "koneksi.php";

            $query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Novel' ORDER BY id_buku DESC limit 8");?>
                    <div class="single-product-slider">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div class="section-title">
										<h1>Novel</h1>
                                        <p>Buku terbaru</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- single product -->
                                <?php if(mysqli_num_rows($query)>0){ ?>
                                    <?php
                        while($data = mysqli_fetch_array($query)){
                    ?>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-product">
                                        <!-- menampilkan gambar -->
                                        <img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>"alt="">
                                        <div class="product-details">
											<div class="text-center">
												<h6>
													<?php echo $data["judul"];?>
												</h6>
											</div>
											<div class="price">
                                                <h6>Penulis : <?php echo $data["pengarang"];?></h6>
                                            </div>
                                            <div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Novel" class="btn btn-info">
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
                            <?php }} ?>
                                </div>
                            </div>
                        </div>

					<!-- Kategori Matematika -->
                    <!-- single product slide -->
                    <?php include "koneksi.php";

            $query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Matematika' ORDER BY id_buku DESC limit 8");?>
                    <div class="single-product-slider">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div class="section-title">
										<h1>Matematika</h1>
                                        <p>Buku terbaru</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- single product -->
                                <?php if(mysqli_num_rows($query)>0){ ?>
                                    <?php
                        while($data = mysqli_fetch_array($query)){
                    ?>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-product">
                                        <!-- menampilkan gambar -->
                                        <img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>"alt="">
                                        <div class="product-details">
											<div class="text-center">
												<h6>
													<?php echo $data["judul"];?>
												</h6>
											</div>
                                            <div class="price">
                                                <h6>Penulis : <?php echo $data["pengarang"];?></h6>
                                            </div>
                                            <div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Matematika" class="btn btn-info">
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
                            <?php }} ?>
                                </div>
                            </div>
                        </div>			

					<!-- kategori Ensiklopedia -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Ensiklopedia' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Ensiklopedia</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
										</div>
										<div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Ensiklopedia" class="btn btn-info">
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
						<?php }} ?>
							</div>
						</div>
					</div>

					<!-- kategori Buku Cerita -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Buku Cerita' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Buku Cerita</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
										</div>
										<div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Buku Cerita" class="btn btn-info">
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
						<?php }} ?>
							</div>
						</div>
					</div>

					<!-- kategori Agama -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Agama' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Agama</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
										</div>
										<div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Agama" class="btn btn-info">
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
						<?php }} ?>
							</div>
						</div>
					</div>

					<!-- kategori kemuh -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Kemuhammadiyahan' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Kemuhammadiyahan</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
										</div>
										<div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Kemuhammadiyahan" class="btn btn-info">
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
						<?php }} ?>
							</div>
						</div>
					</div>

					<!-- kategori Bahasa Arab -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'Bahasa Arab' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Bahasa Arab</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
										</div>
										<div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= Bahasa Arab" class="btn btn-info">
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
						<?php }} ?>
							</div>
						</div>
					</div>

					<!-- kategori dll -->
                    <!-- single product slide -->
					<?php include "koneksi.php";

				$query = mysqli_query($koneksi,"SELECT * FROM buku where kategori = 'dll' ORDER BY id_buku DESC limit 8");?>
				<div class="single-product-slider">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 text-center">
								<div class="section-title">
									<h1>Buku lainnya</h1>
									<p>Buku terbaru</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- single product -->
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
					while($data = mysqli_fetch_array($query)){
				?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<!-- menampilkan gambar -->
									<img class="img-fluid" src="img/buku/<?php echo $data['foto'];?>" alt="">
									<div class="product-details">
										<div class="text-center">
											<h6>
												<?php echo $data["judul"];?>
											</h6>
										</div>
										<div class="price">
											<h6>Penulis : <?php echo $data["pengarang"];?></h6>
										</div>
										<div class="blog_post blog_info">
                                            <ul class="blog_meta text-center">
												<a href="informasi.php?id=<?= $data['id_buku']; ?>&kategori= dll" class="btn btn-info">
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
						<?php }} ?>
							</div>
						</div>
					</div>

                </section>
                <!-- end product Area -->
			</div>
		</div>
	</div>

<?php include"footerdpn.php"; ?>