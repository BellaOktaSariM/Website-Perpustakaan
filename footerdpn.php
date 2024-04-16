<!-- start footer Area -->
<footer class="footer-area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Kontak</h6>
					<p>
						<div class="footer-social d-flex align-items-center">
							<p>
								<a>
									<i class="fa fa-phone">
										087738038727
									</i>
								</a>
								<br>
								<a>
									<i class="fa fa-whatsapp">
										081328587010
									</i>
								</a>
							</p>
						</div>
					</p>
				</div>
			</div>
			<div class="col-lg-4  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Kunjungi Kami</h6>
					<div class="footer-social d-flex align-items-center">
						<a href="https://www.google.com/maps/dir//sd+muhammadiyah+jogodayoh/@-7.9272218,110.3216151,18z/data=!4m9!4m8!1m1!4e2!1m5!1m1!1s0x2e7aff847a3ccba9:0xf0cb66c25f33c88c!2m2!1d110.32258!2d-7.92737">
							<i class="fa fa-map-o">
								Jogodayoh, Sumbermulyo, <br>Kec. Bambanglipuro,Bantul, <br>Daerah Istimewa Yogyakarta.
							</i>
						</a>
					</div>
					<br><br>
					<p>sosial media</p>
					<div class="footer-social d-flex align-items-center">
						<p>
							<a><i class="fa fa-google-plus"></i></a>sdm.jogodayoh@gmail.com
							<br>
							<a href="http://www.sdmuhjogodayoh.sch.id/"><i class="fa fa-internet-explorer"></i></a>Website kami
							<br>
							<a href="https://www.instagram.com/sdmuhammadiyahjogodayoh/"><i class="fa fa-instagram"></i></a>Instagram kami
							<br>
							<a href="https://belajar.kemdikbud.go.id/"><i class="fa fa-book"></i></a>Rumah Belajar
						</p>
					</div>
					<!-- <h6>Newsletter</h6>
						<p>Stay update with our latest</p> -->
				</div>
			</div>
			<div class="col-lg-5  col-md-6 col-sm-6">
				<div class="single-footer-widget mail-chimp">
					<h6>Masukan dan Saran</h6>
					<!-- <h6 class="mb-20">Instragram Feed</h6> -->
					<form action="komen.php" method="post">
						<table class="table table-black text-center form">
							<tbody>
								<ul>
									<li>
										<!-- <label for="nama">Nama</label> -->
										<input class="single-input" placeholder="Nama" type="text" name="nama" id="nama" required>
									</li>
									<br>
									<li>
										<!-- <label for="email">Email</label> -->
										<input class="single-input" placeholder="Email" type="text" name="email" id="email">
									</li>
									<br>
									<li>
										<!-- <label for="email">Kritik</label> -->
										<input class="single-input" placeholder="Kritik" type="text" name="kritik" id="kritik" required>
									</li>
									<br>
									<li>
										<!-- <label for="email">Saran</label> -->
										<input class="single-input" placeholder="Saran" type="text" name="saran" id="saran" required>
									</li>
									<br>
									<li>                                
            	                    	<button class="btn btn-info btn-xs" type="submit" name="submit">
        	                            	<i class="fa fa-send"> Kirim</i>
		                                </button>
									</li>
								</ul>
							</tbody>
						</table>
					</form>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<?php 
    if(isset($_GET['r'])){
        $r =  $_GET['r'];
?>
    <script>
        var r = <?= $r ?>;
        // console.log(r);
        if(r == 'sukses'){
            alert("Kritik dan Saran Terkirim !");
		}
	</script>
<?php } ?>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>