<div class="container-fluid">
    <?php include 'koneksi.php' ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-5  ">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-lg-12">
            <a href="<?= base_url('admin'); ?>" class="btn mb-3 btn-primary">
                <i class="fas fa-long-arrow-alt-left"></i>
            </a>
            <a href="<?= base_url('admin/download'); ?>" class="btn btn-success mb-3 ml-1"><i class="fas fa-download"></i> Download History Pengukuran</a>
            <div style="overflow-x:auto;">
                <table class="table table-hover ">
                    <thead class="table text-white bg-primary" style="text-align: center;">
                        <tr style="color: white;">
                            <th scope="col">No.</th>
                            <th scope="col">NO SPT</th>
                            <th scope="col" width="20%">Tanggal SPT</th>
                            <th scope="col" width="30%">Petugas</th>
                            <th scope="col">Nama Stasiun</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;color:black">
                        <?php $i = 1; ?>
                        <?php $x = 0; ?>
                        <?php foreach ($total as $tb) : ?>
                            <tr>
                                <th style="vertical-align: middle;" scope="row"><?= $i; ?></th>
                                <td style="vertical-align: middle;"><a href="<?= base_url('admin/history_info/' . $tb['session']) ?>"><?= $tb['no_spt']; ?></a></td>
                                <td style="vertical-align: middle;"><?= $tb['tgl_spt']; ?></td>
                                <td style="vertical-align: middle;">
                                    <?php
                                    $id = $tb['user_id'];
                                    $sql = mysqli_query($koneksi, "SELECT `name` FROM `user`
                                                                  JOIN `2pengukuran_stasiun` ON `2pengukuran_stasiun`.`user_id` = `user`.`id`
                                                                  WHERE `user`.`id` = '$id'");
                                    $nama = mysqli_fetch_array($sql);
                                    ?>
                                    <?= $nama[$x]; ?>
                                </td>
                                <td style="vertical-align: middle;"><?= $tb['penyelenggara']; ?></td>
                                <td style="vertical-align: middle;">
                                    <a href="<?= base_url('admin/delete_info/' . $tb['id']) ?>" class="badge badge-danger" onclick="return confirm('Apakah Ingin Menghapus?');">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>