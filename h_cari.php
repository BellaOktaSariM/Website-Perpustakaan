<?php 
    require "h_header.php";
    include "koneksi.php";

$i = 1;

$key = $_GET['cari'];
$QueryString = "SELECT * FROM buku WHERE judul LIKE '%$key%' or pengarang LIKE '%$key%' or penerbit LIKE '%$key%' or kategori LIKE '%$key%' ORDER BY id_buku DESC";
$buku = mysqli_query($koneksi, $QueryString);
?>

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <br><br>
        <a href="form_simpan.php" class="genric-btn primary radius text-center">
            Tambah Data Buku
        </a>
        <div class="cart_inner">
            <div class="irs"></div>

            <!-- tabel buku -->
            <table class="table table-secondary text-center">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Rak</th>
                        <th scope="col">Kategori</th>
                        <th scope="col"></th>
                        <th scope="col" colspan="3"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($buku as $bk) : ?>
                        <!-- start data buku -->
                        <tr>
                            <td>
                                <h5><?= $i; ?></h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/buku/<?= $bk['foto']; ?>" width="100" height="100" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>
                                    <?= $bk["id_buku"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bk["judul"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bk["pengarang"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bk["penerbit"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $bk["rak"]; ?>
                                </h5>
                            </td> 
                            <td>
                                <h5>
                                    <?= $bk["kategori"]; ?>
                                </h5>
                            </td>
                            <td>    
                                <a href="form_ubah.php?id=<?php echo $bk['id_buku']; ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-recycle"> UBAH</i>
                                </a>
                            </td>
                            <td> 
                                <a href="proses_hapus.php?id=<?php echo $bk['id_buku']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fa fa-trash"> HAPUS </i>
                                </a>
                            </td>
                            <td></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <!-- end data buku -->
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--================End Cart Area =================-->

<?php include "footer.php"; ?>