<?php require 'h_head.php';
include 'koneksidpn.php';

$komen   = query("SELECT * FROM komen ORDER BY id DESC");
$i = 1;

?>

<!-- End Banner Area -->
<br><br><br>
<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <!-- tabel pustakawan -->
            <table class="table table-secondary">
                <thead class="border table-bordered table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kritik</th>
                        <th scope="col">Saran</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($komen as $km) : ?>
                        <!-- start data buku -->
                        <tr>
                            <td>
                                <h5><?= $i; ?></h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $km["nama"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $km["email"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $km["kritik"]; ?>
                                </h5>
                            </td>
                            <td>
                                <h5>
                                    <?= $km["saran"]; ?>
                                </h5>
                            </td>
                            <td>
                                <a href="komen_hapus.php?id=<?php echo $km['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus?')">
                                    <i class="fa fa-trash"> HAPUS </i>
                                </a>
                            </td>
                            <!-- <td>
                                <h5>
                                    <?php
                                    //  "<td><a href='komen_hapus.php?id=" . $km['id'] . "'>Hapus</a></td>";
                                        ?>
                                </h5>
                            </td> -->
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

<?php include 'footer.php'; ?>