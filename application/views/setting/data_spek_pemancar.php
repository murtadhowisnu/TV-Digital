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
                <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#tambahSpekPemancar"><i class="fas fa-plus"></i>&nbsp;Tambah Data Spesifikasi</a>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary" style="color: white;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Stasiun</th>
                                        <th scope="col">Jumlah Spesifikasi Perangkat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($spek_pem as $spem) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $spem['nama_stasiun']; ?></td>
                                            <td class="text-center">
                                                <?php
                                                $jlh_spek = $this->db->get_where('radio_spek_pemancar', ['id_stasiun' => $spem['id_stasiun']])->num_rows();
                                                echo $jlh_spek;
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="badge badge-info" data-toggle="modal" data-target="#infoSpekPemancarRow<?= $spem['id_spek'] ?>"><i class="fas fa-eye"></i></a>
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
        <div class="modal fade" id="tambahSpekPemancar" tabindex="-1" aria-labelledby="tambahSpekPemancarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahSpekPemancarLabel">Tambah Data Pemancar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/tambah_spek_pemancar'); ?>" method="POST">
                        <div class="modal-body" style="padding:20px 30px 20px 20px">
                            <div class="row">
                                <label for="nama" class="col-lg-6">Nama Stasiun</label>
                                <div class="input-group col-lg-6">
                                    <select name="id_stasiun" id="id_stasiun" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($stasiun as $s) : ?>
                                            <option value="<?= $s['id'] ?>"><?= $s['nama_stasiun'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="merk" class="col-lg-6">Merk</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="form-control" id="merk" name="merk">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="jenis" class="col-lg-6">Jenis/Type</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="form-control" id="jenis" name="jenis">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="no_seri" class="col-lg-6">Nomor Seri</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="decimal form-control" id="no_seri" name="no_seri">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="negara" class="col-lg-6">Negara Pembuat</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="form-control" id="negara" name="negara">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="tahun" class="col-lg-6">Tahun Pembuatan</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="decimal form-control" id="tahun" name="tahun" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="freq" class="col-lg-6">Frekuensi</span></label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="decimal form-control" id="freq" name="freq">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Mhz</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="kelas_emisi" class="col-lg-6">Kelas Emisi</label>
                                <div class="input-group col-lg-6">
                                    <input type="kelas_emisi" class="form-control" id="kelas_emisi" name="kelas_emisi">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="bandwith" class="col-lg-6">Bandwith</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="decimal form-control" id="bandwith" name="bandwith" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Khz</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="kedalaman_mod" class="col-lg-6">Kedalaman Modulasi</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="decimal form-control" id="kedalaman_mod" name="kedalaman_mod">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">(%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="max_power" class="col-lg-6">Max Power</label>
                                <div class="input-group col-lg-6">
                                    <input type="text" class="decimal form-control" id="max_power" name="max_power">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Watt</span>
                                    </div>
                                </div>
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


        <?php foreach ($spek_pem as $spem) : ?>

            <div class="modal fade" id="infoSpekPemancarRow<?= $spem['id_spek'] ?>" tabindex="-1" aria-labelledby="infoSpekPemancarRowLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoSpekPemancarRowLabel">Detail Data Spesifikasi</h5>
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
                                                <th scope="col">Merk</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $id_spek = $spem['id_spek']; ?>
                                            <?php
                                            $queryDetailSpekPem = "SELECT *
                                                     FROM `radio_spek_pemancar` WHERE `id_spek` = $id_spek
                                      ";
                                            $DetSpkPem = $this->db->query($queryDetailSpekPem)->result_array();

                                            ?>
                                            <?php $i = 1; ?>
                                            <?php foreach ($DetSpkPem as $p) :  ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $p['merk']; ?></td>
                                                    <td><?= $p['jenis']; ?></td>
                                                    <td class="text-center">
                                                        <a href="#" class="badge badge-info" data-toggle="modal" data-target="#infoSpekPemancar<?= $p['id_spek'] ?>"><i class="fas fa-eye"></i></a>
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

            <div class="modal fade" id="infoSpekPemancar<?= $spem['id_spek'] ?>" tabindex="-1" aria-labelledby="infoSpekPemancarLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoSpekPemancarLabel">Detail Data Spesifikasi Pemancar</h5>
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
                                                                    <h4 style="color:black"><?= $spem['nama_stasiun']; ?></h4>
                                                                </div>
                                                                <div class="col-lg-6 mb-2" style="text-align: right;">
                                                                    <a href="#" class="badge badge-warning btn-edit-stasiun" data-id="<?= $spem['id'] ?>"><i class="fas fa-pencil-alt"></i>&nbsp;Edit</a>
                                                                </div>
                                                            </div>
                                                            <tr>
                                                                <th>Merk</th>
                                                                <td>:</td>
                                                                <td><?= $spem['merk']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jenis/Type</th>
                                                                <td>:</td>
                                                                <td><?= $spem['jenis']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor Seri</th>
                                                                <td>:</td>
                                                                <td><?= $spem['no_seri']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Negara Pembuat</th>
                                                                <td>:</td>
                                                                <td><?= $spem['negara']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tahun Pembuatan</th>
                                                                <td>:</td>
                                                                <td><?= $spem['tahun']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frekuensi</th>
                                                                <td>:</td>
                                                                <td><?= $spem['frekuensi']; ?>&nbsp;<span><b>(Mhz)</b></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kelas Emisi</th>
                                                                <td>:</td>
                                                                <td><?= $spem['kelas_emisi']; ?></td>
                                                                <!-- <td> <?php if ($spem['telp'] == NULL) { ?>
                                                                <p>-</p> <?php
                                                                            } else {
                                                                                echo $spem['telp'];;
                                                                            } ?>
                                                        </td> -->
                                                            </tr>
                                                            <tr>
                                                                <th>Bandwith</th>
                                                                <td>:</td>
                                                                <td><?= $spem['bandwith']; ?>&nbsp;<span><b>(Khz)</b></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kedalaman Modulasi</th>
                                                                <td>:</td>
                                                                <td><?= $spem['kedalaman_mod']; ?>&nbsp;<span><b>(%)</b></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Max Power</th>
                                                                <td>:</td>
                                                                <td><?= $spem['max_power']; ?>&nbsp;<span><b>(Watt)</b></span></td>
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