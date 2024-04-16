<?php
require "header_index.php";
$data = $koneksi->query("SELECT * FROM berita WHERE id='{$_GET['id']}'");
$r = $data->fetch_array();
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Details berita</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="single-prd-item">
                    <br><br><br><br>
                    <img class="img-fluid-lgn" src="img/berita/<?= $r['foto']; ?>" alt="" width="630" height="630">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h2><span><?= $r['judul']; ?></span></h2>
                    <ul class="list">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <li><br>
                                            <h5><a id="tgl"><span>Waktu</span> : <?= $r['tgl']; ?></a></h5>
                                        </li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
                    <p><?= $r['deskrip']; ?></p>
                </div>
                <div class="generic-btn info radius text-center">
                    <a href="berita.php" class="genric-btn success radius text-center">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<br><br><br><br><br>

<?php include "footerdpn.php"; ?>