<?php require 'h_head.php';
include 'koneksidpn.php';

$perpus = query("SELECT * FROM perpus");
?>

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <br><br>
        <a href="pp_simpan.php" class="genric-btn primary radius text-center">
            Tambah Data
        </a>
        <div class="cart_inner">
            <!-- <div class="genric-btn success circle">
                <a href="m_p_simpan.php">Tambah Misi</a>
            </div> -->
            <div class="irs"></div>

            <!-- tabel pustakawan -->
            <h2></h2>
            <table class="table table-secondary">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Program Perpus</th>
                        <th scope="col">Tata tertib</th>
                        <th scope="col">SOP</th>
                        <th scope="col">Struktur Organisasi Perpus</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($perpus as $pus) : ?>
                        <!-- start data buku -->
                        <tr>
                            <td>
                                <h5>
                                    <?= $pus["visi"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["misi"]; ?>
                                </h5>

                            </td>
                            <td>
                                <h5>
                                    <?= $pus["program"]; ?>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <!-- <div class="media-body"> -->
                                    <h5>    
                                        <?= $pus["ttb"]; ?>
                                    </h5>
                                    <!-- </div> -->
                                </div>
                            </td>
                            <td>
                                <h5>
                                    <?= $pus["sop"]; ?>
                                </h5>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/perpus/<?= $pus['foto']; ?>" width="150" height="150" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="pp_ubah.php?id=<?php echo $pus['id']; ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-recycle"> UBAH</i>
                                </a>
                            </td>
                            <td>
                                <a href="pp_p_hapus.php?id=<?php echo $pus['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fa fa-trash"> HAPUS </i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--================End Cart Area =================-->

<?php include 'footer.php'; ?>