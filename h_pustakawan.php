<?php require 'h_head.php';
include 'koneksidpn.php';

$prestasi   = query("SELECT * FROM prestasi");

$pustakawan = query("SELECT * FROM pustakawan ORDER BY id DESC");
$i = 1;
$u = 1;

?>

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <br><br>
        <a href="p_simpan.php" class="genric-btn primary radius text-center">
            Tambah Data Pustakawan
        </a>
        <div class="cart_inner">
            <div class="irs"></div>

            <!-- tabel pustakawan -->
            <h2>Tabel Pustakawan</h2>
            <table class="table table-secondary">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Facebook</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($pustakawan as $pus) : ?>
                        <!-- start data buku -->
                        <tr>
                            <td>
                                <h5><?= $i; ?></h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/pustakawan/<?= $pus['foto']; ?>" width="100" height="100" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["nama"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["nomor"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["alamat"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["ig"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["fb"]; ?>
                                </h5>
                            </td>
                            <td>
                                <a href="p_ubah.php?id=<?php echo $pus['id']; ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-recycle"> UBAH</i>
                                </a>
                            </td>
                            <td>
                                <a href="p_p_hapus.php?id=<?php echo $pus['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fa fa-trash"> HAPUS </i>
                                </a>
                            </td>
                            <!-- <td>
                                <h5>
                                    <?php
                                        // echo "<a><a href='p_ubah.php?id=" . $pus['id'] . "'>Ubah</a></a>";
                                        // echo "<td><a href='p_p_hapus.php?id=" . $pus['id'] . "'>Hapus</a></td>";
                                        ?>
                                </h5>
                            </td> -->
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <div class="irs"></div>
            <div class="irs"></div>
            <div>
                <a href="pr_simpan.php" class="genric-btn primary radius text-center">
                    Tambah Data Prestasi
                </a>
            </div>
            <div class="irs"></div>

            <!-- tabel prestasi -->
            <h2>Tabel Prestasi</h2>
            <table class="table table-secondary">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Prestasi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($prestasi as $pre) : ?>
                        <tr>
                            <td>
                                <h5><?= $u; ?></h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/prestasi/<?= $pre['foto']; ?>" width="100" height="100" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>
                                    <?= $pre['nama'] ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $pre['deskrip'] ?>
                                </h5>
                            </td>
                            <td>
                                <a href="pr_ubah.php?id=<?php echo $pre['id']; ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-recycle"> UBAH</i>
                                </a>
                            </td>
                            <td>
                                <a href="pr_p_hapus.php?id=<?php echo $pre['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fa fa-trash"> HAPUS </i>
                                </a>
                            </td>
                            <!-- <td>
                                <h5>
                                    <?php
                                        // echo "<a><a href='pr_ubah.php?id=" . $pre['id'] . "'>Ubah</a></a>";
                                        // echo "<td><a href='pr_p_hapus.php?id=" . $pre['id'] . "'>Hapus</a></td>";
                                        ?>
                                </h5>
                            </td> -->
                        </tr>
                        <?php $u++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--================End Cart Area =================-->

<?php include 'footer.php'; ?>