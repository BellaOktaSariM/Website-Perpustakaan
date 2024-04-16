<?php require "h_head.php"; ?>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <form method="post" action="bt_p_simpan.php" enctype="multipart/form-data">
            <div class="order_details_table">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Judul</td>
                            <td><input class="form-control" type="text" name="judul" required></td>
                        </tr>
                        <tr>
                            <td>waktu</td>
                            <td><input class="form-control" type="date" name="tgl"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Singkat</td>
                            <td><textarea class="form-control" type="text" name="desing" id="desing" cols="30" rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Lengkap</td>
                            <td><textarea class="form-control" type="text" name="deskrip" id="deskrip" cols="30" rows="10" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><input type="file" name="foto" required></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-info" value="SIMPAN">
                                <a href="h_berita.php" class="btn btn-danger" onclick="return confirm('Yakin Kembali?')">
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