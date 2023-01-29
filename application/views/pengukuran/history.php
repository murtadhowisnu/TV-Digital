<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4 mb-4"><?= $title; ?> <b style="color: red; font-size:35px;"></b></h1>
            <a onclick="goBack()" href="#" class="btn mb-3 ml-2" style="background-color: #007DFF; color:white;">
                <i class="fas fa-long-arrow-alt-left"></i>
            </a>
            <div class="row">
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-primary" style="color: white;">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">No. SPT</th>
                                    <th scope="col">Tanggal SPT</th>
                                    <th scope="col">Penyelenggara</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($info as $tb) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $tb['no_spt']; ?></td>
                                        <td><?= $tb['tgl_spt']; ?></td>
                                        <td><?= $tb['nama_stasiun']; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('pengukuran/info/' .  str_replace('/', '-', $tb['no_spt'])) ?>"><i class="fas fa-eye"></i></a>
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
    </main>
</div>
</div>