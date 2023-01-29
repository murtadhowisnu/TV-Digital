<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary" style="color: white;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kanal</th>
                            <th scope="col">Frekuensi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kanal as $k) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $k['kanal']; ?></td>
                                <td><?= $k['frekuensi']; ?></td>
                                <td class="text-center">
                                    <a href="#" class="badge badge-info" data-toggle="modal" data-target="#infoPemancar<?= $k['id'] ?>"><i class="fas fa-eye p-1"></i></a>
                                    <a href="#" class="badge badge-danger"><i class="fas fa-trash p-1"></i></a>
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
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->