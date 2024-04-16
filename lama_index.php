<?php
    require 'header_index.php';
	$berita = query("SELECT * FROM berita");
	$perpus	= query("SELECT * FROM perpus");
	$i = 1;
?>
<br><br><br><br><br><br><br>
	<div class="text-center">
		<h3>BERITA PERPUSTAKAAN</h1>
	</div>
</br>
<section class="category-area features-area">
	<!-- <div class="container"> -->
	<?php foreach ($berita as $bt) : ?>
		<div class="sldshw-contr">
			<div clas="center"> 
					<div class="mySlides fade"> 
						<div class="text-center"><h5><?= $bt['judul']; ?></h6></div>
						<br>
						<a href="informasibt.php?id=<?= $bt['id']; ?>" class="white_bg_btn"><img src="img/berita/<?= $bt['foto']; ?>"width="500px" height="350"></a>
						<!-- <div class="text">Caption Three</div>                 -->
					</div>
				</div>
				<br>
				<?php endforeach; ?>
				<div style="text-align:center">
					<span class="dot"></span> 
					<span class="dot"></span> 
					<span class="dot"></span> 
				</div>
			</div>
	<!-- </div> -->
</section>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

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
						<h6>Buku</h6>
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
							<h6>E-Book</h6>
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
						<h6>Berita</h6>
						<!-- <p>Free Shipping on all order</p> -->
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<a href="pustakawan.php"></a>
								<img src="img/features/avatar.png" width="30px" height="30" alt="">
							</a>
						</div>
						<h6>Pustakawan</h6>
						<!-- <p>Free Shipping on all order</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

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
					<p align="left">
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