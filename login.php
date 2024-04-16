<?php require "header_index.php"; ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">

		</div>
	</div>
</section>
<!-- End Banner Area -->

<?php
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
	}
}
?>

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<img class="img-fluid-lgn" src="img/login.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Login</h3>
					<form class="row login_form" action="cek_login.php" method="post" id="cek_login" novalidate="novalidate">
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="primary-btn">Log In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->

<?php include "footerdpn.php"; ?>
<?php 
    if(isset($_GET['pesan'])){
        $pesan =  $_GET['pesan'];
?>
    <script>
        var pesan = <?= $pesan ?>;
        // console.log(r);
        if(pesan == 'gagal'){
            alert("Username atau Password tidak cocok!");
        }
	</script>
<?php } ?>