<?php require "h_head.php"; ?>

<!-- Start Banner Area -->
<!-- <section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Menambah E-Book</h1>
            </div>
        </div>
    </div>
</section> -->
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <form method="post" action="e_p_simpan.php" enctype="multipart/form-data">
            <div class="order_details_table">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Judul</td>
                            <td><input class="form-control" type="text" name="judul" required></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td><input class="form-control" type="text" name="pengarang"></td>
                        </tr>
                        <tr>
                            <td>Link Baca Online</td>
                            <td><input class="form-control" type="text" name="baca"></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><input type="file" name="foto" required></td>
                        </tr>
                        <tr>
                            <td>File</td>
                            <td><input type="file" name="berkas" required></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-info" value="SIMPAN">
                                <a href="h_ebook.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
                                    BATAL
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<!--================End Order Details Area =================-->

<?php include "footer.php"; ?>