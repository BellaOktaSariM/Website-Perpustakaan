<?php
    require "header_index.php";

$prestasi   = query("SELECT * FROM prestasi");
$pustakawan = query("SELECT * FROM pustakawan");
// $res= mysqli_query($koneksi,"SELECT * FROM pustakawan");
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Informasi Pustakawan</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="pustakawan.php">Pustakawan</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<br><br>

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- prestasi -->
                <div class="blog_left_sidebar">
                    <?php $i = 1; ?>
                    <?php foreach ($prestasi as $pr) : ?>
                        <article class="row blog_item">
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <h2>
                                        <td>
                                            <?= $i; ?>.
                                        </td>
                                        <td>
                                            <?= $pr['nama']; ?>
                                        </td>
                                    </h2>
                                    <img src="img/prestasi/<?= $pr['foto']; ?>" alt="" width="550" height="450">
                                    <div class="blog_details">
                                        <p><?= $pr['deskrip']; ?></p>
                                        <!-- <a href="single-blog.html" class="white_bg_btn">View More</a> -->
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- pustakawan -->
            <?php foreach ($pustakawan as $pk) : ?>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/pustakawan/<?= $pk['foto']; ?>" alt="" width="300px" height="300px">
                            <h4><?= $pk['nama']; ?></h4>
                            <p><?= $pk['nomor']; ?></p>
                            <div class="social_icon">
                                <a href="<?= $pk['fb']; ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $pk['ig']; ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p><?= $pk['alamat']; ?></p>
                        </aside>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--================Blog Area =================-->

<br>

<?php
include 'footerdpn.php';
?>