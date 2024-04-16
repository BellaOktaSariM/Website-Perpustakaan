<?php 
    require "h_header_berita.php";
    include "koneksi.php";

$i = 1;

$key = $_GET['cari'];
$QueryString = "SELECT * FROM berita WHERE judul LIKE '%$key%' or tgl LIKE '%$key%' ORDER BY tgl DESC";
$berita = mysqli_query($koneksi, $QueryString);
?>

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <br><br>
        <a href="bt_simpan.php" class="genric-btn primary radius text-center">
            Tambah Berita
        </a>
        <div class="cart_inner">
            <div class="irs"></div>

            <!-- tabel buku -->
            <table class="table table-secondary text-center">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Deskripsi Singkat</th>
                        <th scope="col"></th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($berita as $bt) : ?>
                        <!-- start data buku -->
                        <tr>
                            <td>
                                <h5><?= $i; ?></h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/berita/<?= $bt['foto']; ?>" width="100" height="100" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>
                                    <p>
                                        <?= $bt["judul"]; ?>
                                    </p>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <p>
                                        <?= $bt["tgl"]; ?>
                                    </p>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <p>
                                        <?= $bt["desing"]; ?>
                                    </p>
                                </h5>
                            </td>
                            <td>
                                <a href="bt_ubah.php?id=<?php echo $bt['id']; ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-recycle"> UBAH</i>
                                </a>
                            </td>
                            <td>
                                <a href="bt_p_hapus.php?id=<?php echo $bt['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fa fa-trash"> HAPUS </i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--================End Cart Area =================-->

<?php include "footer.php"; ?>