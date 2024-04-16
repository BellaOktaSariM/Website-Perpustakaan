<?php include 'koneksi.php';
require 'i_header.php';
// $key = $_GET['cari'];
// echo "Keyword pencarian = $key";
$QueryString 	= "SELECT * FROM buku";
$SQL 			= mysqli_query($koneksi, $QueryString);
?>

<!-- start banner Area -->
<section class="banner-areadpn">
	<img id="wehweh" src="img/banner/c1.jpg" alt="" width="100%" height="100%" style="position: fixed;">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">

			<!-- form kotak  -->
			<div id="search_input_box" class="search_input" style="display: block;">
				<div class="container">
					<form class="d-flex justify-content-between" mehod="post" action="cari.php">
						<input type="text" name="cari" id="search_input" class="form-control" placeholder="Silahkan masukkan judul buku atau pengarang">
						<button class="btn" type="submit"></button>
					</form>
				</div>
			</div>

			<!-- form bulet -->

			<!-- <div class="features-area blog_right_sidebar">
											<aside class="single_sidebar_widget search_widget">
												<form action="cari.php" method="post">
												<div class="input-group">
														<input type="text" name="cari" method="post" id="search_input" action="cari.php" class="form-control" placeholder="Search Posts" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
														<span class="input-group-btn">
															<button class="btn btn-default" type="submit"><i name="cari" action="cari.php" method="post" class="lnr lnr-magnifier"></i></button>
														</span>
												</div>
												</form>
												<div class="br"></div>
											</aside>
										</div> -->

			<!-- <h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
			<!-- <div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-img.png" alt="">
								</div>
							</div> -->
		</div>
	</div>
	</div>
</section>
<!-- End banner Area -->

<?php include 'footer.php' ?>