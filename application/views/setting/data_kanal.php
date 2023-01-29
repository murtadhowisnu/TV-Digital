<body onload="initialize()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                <div class="row">
                    <div class="col-lg-8 ml-4 ">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
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
                                                <a href="#" class="badge badge-warning" data-toggle="modal" data-target="#infoPemancar<?= $k['id'] ?>"><i style="color: white;" class="fas fa-pencil-alt"></i></a>
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