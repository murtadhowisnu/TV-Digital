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
                <a onclick="goBack()" href="#" class="btn mb-3 ml-2" style="background-color: #007DFF; color:white;">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </a>

                <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#tambahStasiun"><i class="fas fa-plus"></i>&nbsp;Tambah Data Stasiun</a>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary" style="color: white;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Stasiun</th>
                                        <th scope="col" width="30%">Alamat</th>
                                        <th scope="col">Telp</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($stasiun as $s) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $s['nama_stasiun']; ?></td>
                                            <td><?= $s['alamat']; ?></td>
                                            <td class="text-center">
                                                <?php if ($s['telp'] == NULL) { ?>
                                                    <p>-</p> <?php
                                                            } else {
                                                                echo $s['telp'];
                                                            } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($s['email'] == NULL) { ?>
                                                    <p>-</p> <?php
                                                            } else {
                                                                echo $s['email'];;
                                                            } ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="badge badge-info" data-toggle="modal" data-target="#infoStasiun<?= $s['id'] ?>"><i class="fas fa-eye"></i></a>
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

        <!-- Modal -->
        <div class="modal fade" id="editStasiunModal" tabindex="-1" aria-labelledby="editStasiunModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editStasiunModalLabel">Edit Data Stasiun</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('setting/edit_stasiun'); ?>" method="POST">
                        <div class="modal-body" style="padding:20px 30px 20px 20px">
                            <div class="row">
                                <label for="nama" class="col-lg-4 mt-2">Nama Stasiun</label>
                                <input type="text" class="nama_stasiun form-control col-lg-8" id="nama" name="nama" required>
                            </div>
                            <div class="row mt-3">
                                <label for="alamat" class="col-lg-4 mt-2">Alamat</label>
                                <textarea rows="3" class="alamat form-control col-lg-8" id="alamat" name="alamat" required></textarea>
                            </div>
                            <div class="row mt-3">
                                <label for="kelurahan" class="col-lg-4 mt-2">Kelurahan</label>
                                <input type="text" class="kelurahan form-control col-lg-8" id="kelurahan" name="kelurahan" required>
                            </div>
                            <div class="row mt-3">
                                <label for="kecamatan" class="col-lg-4 mt-2">Kecamatan</label>
                                <input type="text" class="kecamatan form-control col-lg-8" id="kecamatan" name="kecamatan" required>
                            </div>
                            <div class="row mt-3">
                                <label for="kotamadya" class="col-lg-4 mt-2">Kotamadya</label>
                                <input type="text" class="kotamadya form-control col-lg-8" id="kotamadya" name="kotamadya" required>
                            </div>
                            <div class="row mt-3">
                                <label for="telp" class="col-lg-4 mt-2">Telp</label>
                                <input type="text" class="telp form-control col-lg-8" id="telp" name="telp" maxlength="15" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-lg-4 mt-2">Email</label>
                                <input type="email" class="email form-control col-lg-8" id="email" name="email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" class="id" name="id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahStasiun" tabindex="-1" aria-labelledby="tambahStasiunLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Stasiun</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('setting/tambah_stasiun'); ?>" method="POST">
                        <div class="modal-body" style="padding:20px 30px 20px 20px">
                            <div class="row">
                                <label for="nama" class="col-lg-4 mt-2">Nama Stasiun</label>
                                <input type="text" class="form-control col-lg-8" id="nama" name="nama" required>
                            </div>
                            <div class="row mt-3">
                                <label for="alamat" class="col-lg-4 mt-2">Alamat</label>
                                <textarea rows="3" class="form-control col-lg-8" id="alamat" name="alamat" required></textarea>
                            </div>
                            <div class="row mt-3">
                                <label for="kelurahan" class="col-lg-4 mt-2">Kelurahan</label>
                                <input type="text" class="form-control col-lg-8" id="kelurahan" name="kelurahan" required>
                            </div>
                            <div class="row mt-3">
                                <label for="kecamatan" class="col-lg-4 mt-2">Kecamatan</label>
                                <input type="text" class="form-control col-lg-8" id="kecamatan" name="kecamatan" required>
                            </div>
                            <div class="row mt-3">
                                <label for="kotamadya" class="col-lg-4 mt-2">Kotamadya</label>
                                <input type="text" class="form-control col-lg-8" id="kotamadya" name="kotamadya" required>
                            </div>
                            <div class="row mt-3">
                                <label for="telp" class="col-lg-4 mt-2">Telp</label>
                                <input type="text" class="form-control col-lg-8" id="telp" name="telp" maxlength="15" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-lg-4 mt-2">Email</label>
                                <input type="email" class="form-control col-lg-8" id="email" name="email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php foreach ($stasiun as $s) : ?>
            <div class="modal fade" id="infoStasiun<?= $s['id'] ?>" tabindex="-1" aria-labelledby="infoStasiunLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoStasiunLabel">Detail Data Stasiun</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="padding:20px;">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                <div>
                                                    <table class="table" style="color: black;">
                                                        <tbody>
                                                            <div class="row">
                                                                <div class="col-lg-6 mb-2" style="text-align: left;">
                                                                    <h4 style="color:black"><?= $s['nama_stasiun']; ?></h4>
                                                                </div>
                                                                <div class="col-lg-6 mb-2" style="text-align: right;">
                                                                    <a href="#" class="badge badge-warning btn-edit-stasiun" data-id="<?= $s['id'] ?>" data-nama_stasiun="<?= $s['nama_stasiun'] ?>" data-alamat="<?= $s['alamat'] ?>" data-kelurahan="<?= $s['kelurahan'] ?>" data-kecamatan="<?= $s['kecamatan'] ?>" data-kotamadya="<?= $s['kotamadya'] ?>" data-telp="<?= $s['telp'] ?>" data-email="<?= $s['email'] ?>">
                                                                        <i class="fas fa-pencil-alt"></i>&nbsp;Edit
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <tr>
                                                                <th>Alamat</th>
                                                                <td>:</td>
                                                                <td><?= $s['alamat']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kelurahan</th>
                                                                <td>:</td>
                                                                <td><?= $s['kelurahan']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kecamatan</th>
                                                                <td>:</td>
                                                                <td><?= $s['kecamatan']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kotamadya</th>
                                                                <td>:</td>
                                                                <td><?= $s['kotamadya']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Telp</th>
                                                                <td>:</td>
                                                                <td> <?php if ($s['telp'] == NULL) { ?>
                                                                        <p>-</p> <?php
                                                                                } else {
                                                                                    echo $s['telp'];;
                                                                                } ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>:</td>
                                                                <td> <?php if ($s['email'] == NULL) { ?>
                                                                        <p>-</p> <?php
                                                                                } else {
                                                                                    echo $s['email'];;
                                                                                } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>