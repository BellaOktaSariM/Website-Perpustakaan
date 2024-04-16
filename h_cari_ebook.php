<?php 
    require "h_header_ebook.php";
    include "koneksi.php";

$i = 1;

$key = $_GET['cari'];
$QueryString = "SELECT * FROM ebook WHERE judul LIKE '%$key%' or pengarang LIKE '%$key%' ORDER BY id DESC";
$ebook = mysqli_query($koneksi, $QueryString);
?>

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <br><br>
        <a href="e_simpan.php" class="genric-btn primary radius text-center">
            Tambah Data E-Book
        </a>
        <div class="cart_inner">
            <div class="irs"></div>
            <!-- tabel -->
            <table class="table table-secondary">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Baca Sekarang</th>
                        <th scope="col">Berkas</th>
                        <th scope="col">Foto</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($ebook as $bok) : ?>
                        <!-- start data buku -->
                        <tr>
                            <td>
                                <h5><?= $i; ?></h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bok["judul"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bok["pengarang"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bok["baca"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bok["berkas"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <img src="img/buku/<?= $bok['foto']; ?>" width="100" height="100" alt="">
                                </h5>
                            </td>
                            <td>
                                <a href="e_hapus.php?id=<?php echo $bok['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
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