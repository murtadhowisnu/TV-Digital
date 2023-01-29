<body onload="initialize()">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4 mb-4"><?= $title; ?></h1>
                <div class="card mb-3 ml-4 mb-2" style="max-width: 750px;">
                    <div class="card-header bg-primary" style="color: white;">
                        Form Pengukuran Radio
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 pr-5 pl-4">
                                        <form action="<?= base_url('form/form4'); ?>" method="POST" onsubmit="return confirm('Data Sudah Lengkap?');">
                                            <div class="card-header pl-0" style="color: black; background-color:transparent; font-size:20px;">
                                                <b>Spesifikasi Perangkat</b>
                                            </div>
                                            <div class="card-header mb-4 pl-2" style="color: Green; background-color:transparent; font-size:15px;">
                                                <b>Pemancar</b>
                                            </div>
                                            <div class="form-group row">
                                                <label for="merk" class="col-sm-3 col-form-label">Merk</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="merk" name="merk" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis" class="col-sm-3 col-form-label">Jenis/Type</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="jenis" name="jenis" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="seri" class="col-sm-3 col-form-label">Nomor Seri</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="seri" name="seri" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="negara_pem" class="col-sm-3 col-form-label">Negara Pembuat</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="negara_pem" name="negara_pem" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahun_pem" class="col-sm-3 col-form-label">Tahun Pembuatan</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="tahun_pem" name="tahun_pem" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="freq" class="col-sm-3 col-form-label">Frekuensi</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="decimal form-control" id="freq" name="freq" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Mhz</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kelas_em" class="col-sm-3 col-form-label">Kelas Emisi</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" list="input" name="kelas_em" id="kelas_em" />
                                                    <datalist id="input">
                                                        <option>F3E</option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bw" class="col-sm-3 col-form-label">Bandwidth</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class=" decimal form-control" id="bw" name="bw" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Khz</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="dalam" class="col-sm-3 col-form-label">Kedalaman Modulasi</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="decimal form-control" id="dalam" name="dalam" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>%</b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="max_p" class="col-sm-3 col-form-label">Max Power</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="decimal form-control" id="max_p" name="max_p" value="">
                                                </div>
                                                <div class="col-sm-2">
                                                    <b>Watt</b>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent text-center">
                                                <button type="submit" class="btn btn-primary">Next</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>