<style>
    .tbl .tblbody {
        display: block;
        max-height: 300px;
        overflow-y: scroll;
    }

    .tbl .tblhead,
    .tbl .tblbody tr th td {
        display: table;
        width: 100%;
        table-layout: fixed;
    }
</style>
</style>
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
    <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#tambahPemancar"><i class="fas fa-plus"></i>&nbsp;Tambah Data Pemancar</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary" style="color: white;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Stasiun</th>
                            <th scope="col" width="30%">Alamat</th>
                            <th scope="col">Jumlah Pemancar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pemancar as $s) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $s['nama_stasiun']; ?></td>
                                <td><?= $s['alamat']; ?></td>
                                <td class="text-center">
                                    <?php
                                    $jlh = $this->db->get_where('radio_pemancar', ['id_stasiun' => $s['id_stasiun']])->num_rows();
                                    echo $jlh;
                                    ?>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="badge badge-info" data-toggle="modal" data-target="#modalDetailPemancar<?= $s['id_stasiun'] ?>"><i class="fas fa-eye p-1"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="tambahPemancar" tabindex="-1" aria-labelledby="tambahPemancarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pemancar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tambah_pemancar'); ?>" method="POST">
                <div class="modal-body" style="padding:20px 30px 20px 20px">
                    <div class="row">
                        <label for="nama" class="col-lg-4 mt-2">Nama Stasiun</label>
                        <select name="stasiun" id="stasiun" class="form-control col-lg-8" required>
                            <option value=""></option>
                            <?php foreach ($stasiun as $s) : ?>
                                <option value="<?= $s['id'] ?>"><?= $s['nama_stasiun'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row mt-3">
                        <label for="alamat" class="col-lg-4 mt-2">Lokasi Pemancar</label>
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
                        <label for="tinggi_lok" class="col-lg-4 mt-2">Tinggi Lokasi</label>
                        <input type="tinggi_lok" class="form-control col-lg-8" id="tinggi_lok" name="tinggi_lok" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    </div>
                    <div class="row mt-3">
                        <label for="tinggi_ged" class="col-lg-4 mt-2">Tinggi Gedung</label>
                        <input type="tinggi_ged" class="form-control col-lg-8" id="tinggi_ged" name="tinggi_ged" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                    </div>
                    <div class="row mt-3">
                        <label for="tinggi_men" class="col-lg-4 mt-2">Tinggi Menara</label>
                        <input type="tinggi_men" class="form-control col-lg-8" id="tinggi_men" name="tinggi_men" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
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

<?php foreach ($pemancar as $pem) : ?>
    <div class="modal fade" id="modalDetailPemancar<?= $pem['id_stasiun'] ?>" tabindex="-1" aria-labelledby="tabelPemancarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tabelPemancarLabel">Detail Data Pemancar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding:20px;">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary" style="color: white;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Latitude/Longitude</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id_stasiun = $pem['id_stasiun']; ?>
                                    <?php
                                    $queryDetailPem = "SELECT *
                                                     FROM `radio_pemancar` WHERE `id_stasiun` = $id_stasiun
                                      ";
                                    $DetPem = $this->db->query($queryDetailPem)->result_array();

                                    ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($DetPem as $p) :  ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td width="50%"><?= $p['alamat']; ?></td>
                                            <td><?= $p['latitude']; ?> / <?= $p['longitude']; ?></td>
                                            <td class="text-center">
                                                <a href="#" class="badge badge-info" data-toggle="modal" data-target="#infoPemancar<?= $p['id'] ?>"><i class="fas fa-eye p-1"></i></a>
                                                <a href="#" class="badge badge-danger"><i class="fas fa-trash p-1"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php foreach ($pemancar as $s) : ?>
    <div class="modal fade" id="infoPemancar<?= $s['id_stasiun'] ?>" tabindex="-1" aria-labelledby="infoPemancarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoPemancarLabel">Detail Data Pemancar</h5>
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
                                            <table class="table tbl" style="color: black;">
                                                <tbody class="tblbody">
                                                    <div class="row" style="position: sticky;top: 0;background-color:white;border-bottom:1px solid #E2E6F0">
                                                        <div class="col-lg-6 mb-2" style="text-align: left;">
                                                            <h4 style="color:black"><?= $s['nama_stasiun']; ?></h4>
                                                        </div>
                                                        <div class="col-lg-6 mb-2" style="text-align: right;">
                                                            <a href="#" class="badge badge-warning btn-edit-stasiun" data-id="<?= $s['id'] ?>"><i class="fas fa-pencil-alt p-1"></i>&nbsp;Edit</a>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <iframe src="https://maps.google.com/maps?q=<?= $s['latitude'] ?>,<?= $s['longitude'] ?>&hl=es;z=14&amp;output=embed"" width=" 100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                    <tr>
                                                        <th>Latitude</th>
                                                        <td>:</td>
                                                        <td><?= $s['latitude']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Longitude</th>
                                                        <td>:</td>
                                                        <td><?= $s['longitude']; ?></td>
                                                    </tr>
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
                                                        <th>Tinggi Lokasi</th>
                                                        <td>:</td>
                                                        <td><?= $s['tinggi_lok']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tinggi Gedung</th>
                                                        <td>:</td>
                                                        <td><?= $s['tinggi_ged']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tinggi Menara</th>
                                                        <td>:</td>
                                                        <td><?= $s['tinggi_men']; ?></td>
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