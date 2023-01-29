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
                <a href="" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#tambahSpekAntenna"><i class="fas fa-plus"></i>&nbsp;Tambah Data Spesifikasi</a>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class=" table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary" style="color: white;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Stasiun</th>
                                        <th scope="col">Jumlah Spesifikasi Antenna</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($spek_ant as $sant) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $sant['nama_stasiun']; ?></td>
                                            <td class="text-center">
                                                <?php
                                                $jlh_spek_ant = $this->db->get_where('radio_spek_antenna', ['id_stasiun' => $sant['id_stasiun']])->num_rows();
                                                echo $jlh_spek_ant;
                                                ?>
                                            </td>
                                            <td class=" text-center">
                                                <a href="#" class="badge badge-info" data-toggle="modal" data-target="#infoSpekAntennaRow<?= $sant['id_spek'] ?>"><i class="fas fa-eye"></i></a>
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
        <div class="modal fade" id="tambahSpekAntenna" tabindex="-1" aria-labelledby="tambahSpekAntennaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahSpekAntennaLabel">Tambah Data Spesifikasi Antenna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/tambah_spek_antenna'); ?>" method="POST">
                        <div class="modal-body" style="padding:20px 30px 20px 20px">
                            <div class="row">
                                <label for="nama" class="col-lg-4">Nama Stasiun</label>
                                <div class="input-group col-lg-8">
                                    <select name="id_stasiun" id="id_stasiun" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($stasiun as $s) : ?>
                                            <option value="<?= $s['id'] ?>"><?= $s['nama_stasiun'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="jenis_ant" class="col-lg-4">Jenis Antenna</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="form-control" id="jenis_ant" name="jenis_ant">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="polarisasi" class="col-lg-4">Polarisasi</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="form-control" id="polarisasi" name="polarisasi">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="elemen" class="col-lg-4">Jumlah Elemen</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="decimal form-control" id="elemen" name="elemen">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Bay</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="gain" class="col-lg-4">Gain</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="decimal form-control" id="gain" name="gain">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">dB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="beam" class="col-lg-4">Beam Antenna</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="decimal form-control" id="beam" name="beam">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="jenis_kabel" class="col-lg-4">Jenis Kabel</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="form-control" id="jenis_kabel" name="jenis_kabel">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="tipe_kabel" class="col-lg-4">Type Kabel</label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="form-control" id="tipe_kabel" name="tipe_kabel">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="panjang_kabel" class="col-lg-4">Panjang Kabel</span></label>
                                <div class="input-group col-lg-8">
                                    <input type="text" class="decimal form-control" id="panjang_kabel" name="panjang_kabel">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Meter</span>
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


        <?php foreach ($spek_ant as $sant) : ?>
            <div class="modal fade" id="infoSpekAntennaRow<?= $sant['id_spek'] ?>" tabindex="-1" aria-labelledby="infoSpekAntennaRowLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoSpekAntennaRowLabel">Detail Data Spesifikasi</h5>
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
                                                <th scope="col">Jenis Antenna</th>
                                                <th scope="col">Polarisasi</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $id_spek = $sant['id_spek']; ?>
                                            <?php
                                            $queryDetailSpekAnt = "SELECT *
                                                     FROM `radio_spek_antenna` WHERE `id_spek` = $id_spek
                                      ";
                                            $DetSpkAnt = $this->db->query($queryDetailSpekAnt)->result_array();

                                            ?>
                                            <?php $i = 1; ?>
                                            <?php foreach ($DetSpkAnt as $p) :  ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $p['jenis_ant']; ?></td>
                                                    <td><?= $p['polarisasi']; ?></td>
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

            <div class="modal fade" id="infoSpekPemancar<?= $sant['id_spek'] ?>" tabindex="-1" aria-labelledby="infoSpekPemancarLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoSpekPemancarLabel">Detail Data Spesifikasi Antenna</h5>
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
                                                                    <h4 style="color:black"><?= $sant['nama_stasiun']; ?></h4>
                                                                </div>
                                                                <div class="col-lg-6 mb-2" style="text-align: right;">
                                                                    <a href="#" class="badge badge-warning btn-edit-stasiun" data-id="<?= $sant['id'] ?>"><i class="fas fa-pencil-alt"></i>&nbsp;Edit</a>
                                                                </div>
                                                            </div>
                                                            <tr>
                                                                <th>Jenis Antenna</th>
                                                                <td>:</td>
                                                                <td><?= $sant['jenis_ant']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Polarisasi</th>
                                                                <td>:</td>
                                                                <td><?= $sant['polarisasi']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jumlah Elemen</th>
                                                                <td>:</td>
                                                                <td><?= $sant['elemen']; ?>&nbsp;<span><b>(Bay)</b></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Gain</th>
                                                                <td>:</td>
                                                                <td><?= $sant['gain']; ?>&nbsp;<span><b>(dB)</b></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Beam Antenna / Arah</th>
                                                                <td>:</td>
                                                                <td><?= $sant['beam']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jenis Kabel / Feeder</th>
                                                                <td>:</td>
                                                                <td><?= $sant['jenis_kabel']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Type Kabel</th>
                                                                <td>:</td>
                                                                <td><?= $sant['tipe_kabel']; ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Panjang Kabel / Feeder</th>
                                                                <td>:</td>
                                                                <td><?= $sant['panjang_kabel']; ?>&nbsp;<span><b>(Meter)</b></span></td>
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